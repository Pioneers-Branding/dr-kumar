<?php
/**
 * Static build script for Netlify deployment.
 * Usage: php build.php
 */

$root = __DIR__;
$dist = $root . '/dist';
error_reporting(E_ERROR | E_PARSE);

/* ---------- helpers ---------- */
function rrmdir(string $dir): void {
    if (!is_dir($dir)) return;
    foreach (scandir($dir) as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        $path = $dir . '/' . $entry;
        is_dir($path) ? rrmdir($path) : unlink($path);
    }
    rmdir($dir);
}

function rcopy(string $src, string $dst): void {
    if (!is_dir($dst)) mkdir($dst, 0777, true);
    foreach (scandir($src) as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        $s = $src . '/' . $entry;
        $d = $dst . '/' . $entry;
        is_dir($s) ? rcopy($s, $d) : copy($s, $d);
    }
}

function getPhpFiles(string $dir, string $base = ''): array {
    $files = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        if ($item === 'build.php' || $item === 'router.php' || $item === 'includes' || $item === 'dist') continue;
        $path = $dir . '/' . $item;
        if (is_dir($path)) {
            $files = array_merge($files, getPhpFiles($path, $base . $item . '/'));
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            // Skip layout files
            if (strpos($item, 'layout') !== false) continue;
            $files[] = ['path' => $path, 'name' => $base . $item];
        }
    }
    return $files;
}

function getPageBody(string $content): string {
    // Remove all require/include lines
    $lines = explode("\n", $content);
    $lines = array_filter($lines, fn($line) => !preg_match('/^\s*(?:<\?php\s+)?(?:require|include)(?:_once)?\b/i', $line));
    $content = implode("\n", $lines);

    // Remove PHP tags
    $content = preg_replace('/^<\?php\s*/', '', $content);
    $content = preg_replace('/\?>\s*$/', '', $content);

    return trim($content);
}

/* ---------- 1. clean dist ---------- */
echo "🧹 Cleaning $dist\n";
rrmdir($dist);
mkdir($dist, 0777, true);

/* ---------- 2. copy assets ---------- */
if (is_dir($root . '/assets')) {
    echo "📁 Copying assets/\n";
    rcopy($root . '/assets', $dist . '/assets');
}

/* ---------- 3. render pages ---------- */
echo "🔍 Scanning for PHP files...\n";
$phpFiles = getPhpFiles($root);
$built = 0;

foreach ($phpFiles as $file) {
    $htmlName = preg_replace('/\.php$/i', '', $file['name']);

    // Special handling for index.php - output directly as index.html, not index/index.html
    if ($htmlName === 'index') {
        $htmlOutput = 'index.html';
        $outPath = $dist . '/' . $htmlOutput;
        $prefix = '';
        if (!is_dir(dirname($outPath))) {
            mkdir(dirname($outPath), 0777, true);
        }
    } else {
        $htmlOutput = $htmlName . '/index.html';
        $outPath = $dist . '/' . $htmlOutput;
        // Calculate prefix based on OUTPUT path depth
        // dist/about-us/index.html needs ../assets/ (1 level in output path = 1 ../)
        // dist/hernia/symptoms/index.html needs ../assets/ (2 levels = 2 ../)
        $outputDepth = substr_count($htmlOutput, '/');
        $prefix = $outputDepth > 0 ? str_repeat('../', $outputDepth) : '';

        if (!is_dir(dirname($outPath))) {
            mkdir(dirname($outPath), 0777, true);
        }
    }

    echo "  Building $htmlOutput...\n";

    // Get page body content (without require lines)
    $rawContent = file_get_contents($file['path']);
    $pageBody = getPageBody($rawContent);

    // Create a complete HTML file using header/footer includes
    ob_start();

    $_SERVER['DOCUMENT_ROOT'] = $root;
    $_SERVER['PHP_SELF'] = '/' . $file['name'];
    $_SERVER['SCRIPT_NAME'] = '/' . $file['name'];

    // Extract meta variables if defined in the PHP file
    $page_title = null;
    $page_description = null;
    $page_keywords = null;
    $page_url = null;
    $is_home = null;
    $schema_about = null;

    if (preg_match('/\$page_title\s*=\s*([\'"])(.*?)\1\s*;/s', $rawContent, $matches)) {
        $page_title = $matches[2];
    }
    if (preg_match('/\$page_description\s*=\s*([\'"])(.*?)\1\s*;/s', $rawContent, $matches)) {
        $page_description = $matches[2];
    }
    if (preg_match('/\$page_keywords\s*=\s*([\'"])(.*?)\1\s*;/s', $rawContent, $matches)) {
        $page_keywords = $matches[2];
    }
    if (preg_match('/\$page_url\s*=\s*([\'"])(.*?)\1\s*;/s', $rawContent, $matches)) {
        $page_url = $matches[2];
    }

    if (!$page_url) {
        if ($htmlName === 'index') {
            $page_url = 'https://herniacare360.com/';
        } else {
            $cleanHtmlName = $htmlName;
            if (str_ends_with($cleanHtmlName, '/index')) {
                $cleanHtmlName = substr($cleanHtmlName, 0, -6);
            }
            $page_url = 'https://herniacare360.com/' . $cleanHtmlName;
        }
    }

    // Load config (need to reset variables between pages)
    $site = $nav = $herniaConditions = $treatments = $stats = null;
    // Force base_path BEFORE loading config so it won't be recalculated
    $base_path = $prefix;
    require $root . '/includes/config.php';
    // Ensure config doesn't override our calculated base_path
    $base_path = $prefix;

    // Load header (outputs DOCTYPE, <html>, <head>, opening <body>)
    require_once $root . '/includes/blog-feed.php';
    require $root . '/includes/header.php';

    eval('?>' . $pageBody);

    // Load footer (closes <body>, <html>)
    require $root . '/includes/footer.php';

    $fullHtml = ob_get_clean();

    $fullHtml = preg_replace('/(href|src)="(?:(?:\.\.\/)*)assets\//', '$1="' . $prefix . 'assets/', $fullHtml);

    // Fix .php href links to clean URLs
    $fullHtml = preg_replace('/href="([^"]*)\.php"/', 'href="$1/"', $fullHtml);

    // Parse FAQ items from the final HTML to inject FAQPage schema automatically
    $faqs = [];
    if (preg_match_all('/<div class="faq-item[^"]*">.*?<button[^>]*faq-toggle[^>]*>.*?<span[^>]*>(.*?)<\/span>.*?<div class="faq-content[^"]*">.*?<p[^>]*>(.*?)<\/p>/s', $fullHtml, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $match) {
            $question = trim(strip_tags($match[1]));
            $answer = trim(strip_tags($match[2]));
            if ($question && $answer) {
                $faqs[] = [
                    'question' => $question,
                    'answer' => $answer
                ];
            }
        }
    }

    if (!empty($faqs)) {
        $faq_json = [
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => []
        ];
        foreach ($faqs as $faq) {
            $faq_json["mainEntity"][] = [
                "@type" => "Question",
                "name" => $faq['question'],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $faq['answer']
                ]
            ];
        }
        $faq_schema = "\n    <script type=\"application/ld+json\">\n    " . json_encode($faq_json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n    </script>";
        $fullHtml = str_replace('</head>', $faq_schema . "\n</head>", $fullHtml);
    }

    file_put_contents($outPath, $fullHtml);
    echo "  ✅ Built $htmlOutput\n";
    $built++;
}

echo "\n📄 Built $built pages successfully.\n";

/* ---------- 4. sitemap ---------- */
echo "🗺️  Writing sitemap.xml\n";
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
$xml .= "<url><loc>https://herniacare360.com/</loc><changefreq>weekly</changefreq><priority>1.0</priority></url>\n";
$locs = ['https://herniacare360.com/'];
foreach ($phpFiles as $f) {
    $name = preg_replace('/\.php$/i', '', $f['name']);
    if ($name === 'index') continue;
    
    // Normalize index names to avoid duplicate paths like /treatment/index/
    $cleanName = $name;
    if (str_ends_with($cleanName, '/index')) {
        $cleanName = substr($cleanName, 0, -6);
    }
    
    $loc = 'https://herniacare360.com/' . $cleanName;
    
    // Skip duplicate locations in sitemap
    if (in_array($loc, $locs)) continue;
    $locs[] = $loc;
    
    $xml .= "<url><loc>$loc</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>\n";
}
$xml .= '</urlset>';
file_put_contents($dist . '/sitemap.xml', $xml);
file_put_contents($root . '/sitemap.xml', $xml);

/* ---------- 5. robots ---------- */
echo "🤖 Writing robots.txt\n";
file_put_contents($dist . '/robots.txt', "User-agent: *\nAllow: /\nSitemap: https://herniacare360.com/sitemap.xml\n");
file_put_contents($root . '/robots.txt', "User-agent: *\nAllow: /\nSitemap: https://herniacare360.com/sitemap.xml\n");

/* ---------- 6. _redirects ---------- */
echo "🔀 Writing _redirects\n";
// SPA-style: all paths serve from the dist directory where Netlify auto-serves index.html
// The _redirects file ensures clean URLs work
$spam_redirects = [
    "/m14226884455249",
    "/l37093146398484",
    "/a35005553121328",
    "/s48632003298112",
    "/y46770114437452",
    "/l14745465617478/",
    "/t26500356295102/",
    "/c25750975397542",
    "/d27050434311332",
    "/about-us/?nocache=1777519964&jet_blog_ajax=1",
    "/t30330113467173",
    "/y43347913264517",
    "/v12690263279427",
    "/k46621334353461/",
    "/f21824786344903",
    "/i24061154885291/",
    "/b32659714708738",
    "/i49901203599636/",
    "/l12205456442115/",
    "/b29245246540820/",
    "/k29918553252955/",
    "/n28508934785134/",
    "/w30818443692903",
    "/h10665386511028",
    "/t44086153025524",
    "/a20764202708752",
    "/s13003833303091",
    "/l20341095248894",
    "/c18191093689603/",
    "/i47261264611827/",
    "/a37622194466277/",
    "/g22955135870107",
    "/t43700555513971",
    "/z33655543289856/",
    "/n34773205635664/",
    "/z34193745494778",
    "/x47917035885160",
    "/q35077986106770/",
    "/d33020106448119",
    "/c40401426036298",
    "/h23586065688103",
    "/s43212834418768/",
    "/n25732556561383/",
    "/a33050263414431/",
    "/o37788053336506",
    "/t15670816171980",
    "/s49164075661020",
    "/j44895095175880/",
    "/d11368045490717/",
    "/v15479244531145/",
    "/n36093222683291/",
    "/u33281406093672",
    "/r40368094311115/",
    "/u48762563328473/",
    "/p46054915422016/",
    "/a16638254824144/",
    "/i35359234889370/",
    "/d31649775524086/",
    "/w29295376550871",
    "/o38989853946103",
    "/c27769493592654/",
    "/n16083096041824/",
    "/t37093255474337/",
    "/x33545372745360/",
    "/b37753514805903/",
    "/n13587736467108/",
    "/q17792995643766/",
    "/z44690995146593/",
    "/g15003333971095",
    "/i10009004526065/",
    "/u37100175950397/",
    "/l41674754231564/",
    "/g44171064506213/",
    "/j23194804842090/",
    "/x43243724436867/",
    "/e45148712805351/",
    "/e22309403623863/",
    "/j37475903552705/",
    "/b10562895296778/",
    "/b14589002810237/",
    "/c44030272949499/",
    "/b21460545889618/",
    "/t34265415661982/",
    "/b39174453064616/",
    "/p29260973366779/m",
    "/f17939786303188/",
    "/a17115362747937/",
    "/e37498023205690/",
    "/c20858164266104/m",
    "/c12473483142737",
    "/v46686673863416/",
    "/s19135805082481/",
    "/y37019545258604/",
    "/r25123463964986/",
    "/o18582202920703/",
    "/g18036842985766/",
    "/j45654783818535/",
    "/v24172605836911/",
    "/x29397866125580/",
    "/e21510244574225/"
];

$redirects_content = "/index    /    301!\n/index.html    /    301!\n/my_types/inguinal-hernia    https://herniacare360.com/my_types/inguinal-hernia-treatment-in-chennai    301!\n/my_types/inguinal-hernia-surgery-in-chennai    https://herniacare360.com/my_types/inguinal-hernia-treatment-in-chennai    301!\n/my_types/umbilical-hernia-surgery-in-chennai    https://herniacare360.com/my_types/umbilical-hernia-treatment-in-chennai    301!\n/my_types/incisional-hernia-surgery-in-chennai    https://herniacare360.com/my_types/incisional-hernia-treatment-in-chennai    301!\n/my_types/ventral-hernia-surgery-in-chennai    https://herniacare360.com/my_types/ventral-hernia-treatment-in-chennai    301!\n/my_types/femoral-hernia-surgery-in-chennai    https://herniacare360.com/my_types/femoral-hernia-treatment-in-chennai    301!\n/treatment/tapp-repair    https://herniacare360.com/treatment/tapp-repair-in-chennai    301!\n/treatment/hernia-surgery-in-chennai    https://herniacare360.com/treatment/hernia-surgeon-in-chennai    301!\n";

foreach ($phpFiles as $f) {
    $name = preg_replace('/\.php$/i', '', $f['name']);
    if ($name === 'index') {
        $redirects_content .= "/index.php    /    301!\n";
    } else {
        $cleanName = $name;
        if (str_ends_with($cleanName, '/index')) {
            $cleanName = substr($cleanName, 0, -6);
        }
        $redirects_content .= "/{$f['name']}    /{$cleanName}    301!\n";
    }
}

foreach ($spam_redirects as $spam_path) {
    if (strpos($spam_path, '?') !== false) {
        list($path, $query) = explode('?', $spam_path, 2);
        $query_str = str_replace('&', ' ', $query);
        $redirects_content .= "$path $query_str    /    301!\n";
    } else {
        $redirects_content .= "$spam_path    /    301!\n";
    }
}
$redirects_content .= "/*    /index.html   200\n";
file_put_contents($dist . '/_redirects', $redirects_content);

/* ---------- 7. 404 ---------- */
echo "📄 Writing 404.html\n";
file_put_contents($dist . '/404.html', <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Dr. Kumar of Billroth Hospitals</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body{font-family:Inter,sans-serif}.font-display{font-family:Georgia,serif}</style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center">
    <div class="text-center px-6">
        <h1 class="text-8xl font-bold text-cyan-700 mb-4">404</h1>
        <h2 class="text-2xl font-bold text-slate-800 mb-3">Page Not Found</h2>
        <p class="text-slate-600 mb-8">The page you're looking for doesn't exist.</p>
        <a href="/" class="inline-flex items-center gap-2 bg-cyan-700 text-white font-semibold px-6 py-3 rounded-full hover:bg-cyan-800 transition">Back to Home</a>
    </div>
</body>
</html>
HTML
);

echo "\n✨ Build complete!\n";
echo "📦 Output: $dist\n";
echo "📄 Pages: $built\n";
