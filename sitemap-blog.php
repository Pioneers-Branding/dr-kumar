<?php
/**
 * Self-updating sitemap for scheduled blog posts.
 *
 * Lists a blog post only once its publish date has arrived, so Google is never
 * handed a URL that still answers 404 behind the publish gate. Posts already
 * listed in the static sitemap.xml are skipped to avoid duplicates.
 *
 * Reads each post as text and never executes it, so the publish gate cannot
 * fire. The live server clock is evaluated on every request, which means a new
 * post appears here by itself on its publish day, with no cron job or redeploy.
 *
 * Served at /sitemap-blog and advertised in robots.txt.
 */
header('Content-Type: application/xml; charset=UTF-8');

$root  = __DIR__;
$base  = 'https://herniacare360.com/';
$today = date('Y-m-d');

$static = is_file($root . '/sitemap.xml') ? (string) file_get_contents($root . '/sitemap.xml') : '';
$rows  = [];

foreach (glob($root . '/blog/*.php') ?: [] as $file) {
    $src = file_get_contents($file, false, null, 0, 4096);
    if ($src === false || !preg_match("/hc360_publish_gate\\('(\\d{4}-\\d{2}-\\d{2})'\\)/", $src, $gate)) {
        continue; // ungated posts are already live and live in sitemap.xml
    }
    $published = $gate[1];
    if ($published > $today) {
        continue;
    }
    $slug = pathinfo($file, PATHINFO_FILENAME);
    $url  = $base . 'blog/' . $slug;
    if (str_contains($static, '<loc>' . $url . '</loc>')) {
        continue;
    }
    $modified = $published;
    if (preg_match("/\\\$page_modified\\s*=\\s*'(\\d{4}-\\d{2}-\\d{2})'/", $src, $m)) {
        $modified = $m[1];
    }
    $rows[] = [$url, min($modified, $today)];
}

usort($rows, static fn(array $a, array $b): int => strcmp($a[0], $b[0]));

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($rows as [$url, $modified]) {
    echo '<url><loc>' . htmlspecialchars($url, ENT_XML1) . '</loc><lastmod>' . $modified
        . '</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>' . "\n";
}
echo '</urlset>' . "\n";
