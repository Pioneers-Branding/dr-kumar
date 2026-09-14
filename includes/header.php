<?php
if (isset($_SERVER['REQUEST_URI'])) {
    $request_uri = $_SERVER['REQUEST_URI'];
    $path_only = parse_url($request_uri, PHP_URL_PATH);
    
    // Safeguard: Do not redirect .php extension to clean URLs if running locally on the PHP Dev Server without router.php
    $is_dev_server_without_router = (strpos($_SERVER['SERVER_SOFTWARE'] ?? '', 'Development Server') !== false) && (basename($_SERVER['SCRIPT_NAME'] ?? '') !== 'router.php');

    if ($path_only && str_ends_with(strtolower($path_only), '.php') && $path_only !== '/build.php' && !$is_dev_server_without_router) {
        $clean_path = preg_replace('/\.php$/i', '', $path_only);
        if ($clean_path === '/index') {
            $clean_path = '/';
        }
        $query_str = parse_url($request_uri, PHP_URL_QUERY);
        $target = $clean_path . ($query_str ? '?' . $query_str : '');
        header("Location: " . $target, true, 301);
        exit();
    }
}

require_once __DIR__ . '/config.php';

$page_title       ??= 'Advanced Hernia, Laparoscopic & Robotic Surgery | Dr. Kumar Billroth Hospitals';
$page_description ??= 'Dr. Kumar Billroth Hospitals - Senior Consultant in Advanced Hernia, Abdominal Wall Reconstruction & Laparoscopic Surgery in Chennai. 29+ years of expertise, 10,000+ hernia surgeries. Book your appointment today.';
$page_keywords    ??= 'best hernia surgeon Chennai, advanced hernia surgery Chennai, laparoscopic surgeon Chennai, robotic hernia surgeon Chennai, abdominal wall reconstruction Chennai, eTEP TAR surgery Chennai, incisional hernia Chennai, umbilical hernia, inguinal hernia surgery, complex hernia repair';

// Robots directive. Pages that should stay out of the index set
// $page_robots = 'noindex, follow, max-image-preview:large';
// before including this file. "follow" is kept deliberately so link equity
// still flows out of those pages to the rest of the site.
$page_robots      ??= 'index, follow, max-image-preview:large';

// Calculate page URL dynamically if not set
if (!isset($page_url)) {
    $current_script = $_SERVER['SCRIPT_NAME'] ?? $_SERVER['PHP_SELF'] ?? '';
    $current_script_base = basename($current_script);
    if (!empty($current_script) && $current_script_base !== 'index.php' && $current_script_base !== 'build.php') {
        $relative = ltrim(str_replace('\\', '/', $current_script), '/');
        $clean_name = preg_replace('/\.php$/i', '', $relative);
        if (str_ends_with($clean_name, '/index')) {
            $clean_name = substr($clean_name, 0, -6);
        }
        $page_url = $site['url'] . $clean_name;
    } else {
        $page_url = $site['url'];
    }
}

$page_image       ??= $site['url'] . 'assets/images/dr-kumar-office-portrait.jpg';

// Determine the dynamic "about" property for MedicalWebPage schema
if (!isset($schema_about)) {
    $title_lower = strtolower($page_title);
    $url_lower = strtolower($page_url);
    
    if (strpos($url_lower, 'inguinal-hernia') !== false || strpos($title_lower, 'inguinal hernia') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Inguinal Hernia",
            "description" => "A groin hernia occurring when tissue pushes through a weak spot in the groin muscles.",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Inguinal Hernia Repair"],
                ["@type" => "MedicalProcedure", "name" => "Robotic Inguinal Hernia Repair"],
                ["@type" => "MedicalProcedure", "name" => "Open Inguinal Hernia Repair"]
            ]
        ];
    } elseif (strpos($url_lower, 'umbilical-hernia') !== false || strpos($title_lower, 'umbilical hernia') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Umbilical Hernia",
            "description" => "An abdominal hernia occurring near the belly button.",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Umbilical Hernia Repair"],
                ["@type" => "MedicalProcedure", "name" => "Robotic Umbilical Hernia Repair"],
                ["@type" => "MedicalProcedure", "name" => "Open Umbilical Hernia Repair"]
            ]
        ];
    } elseif (strpos($url_lower, 'incisional-hernia') !== false || strpos($title_lower, 'incisional hernia') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Incisional Hernia",
            "description" => "A hernia occurring at the site of a previous surgical incision.",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Abdominal Wall Reconstruction"],
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Incisional Hernia Repair"],
                ["@type" => "MedicalProcedure", "name" => "Robotic Incisional Hernia Repair"]
            ]
        ];
    } elseif (strpos($url_lower, 'ventral-hernia') !== false || strpos($title_lower, 'ventral hernia') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Ventral Hernia",
            "description" => "A hernia appearing in the abdomen, typically along the midline.",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Ventral Hernia Repair"],
                ["@type" => "MedicalProcedure", "name" => "Robotic Ventral Hernia Repair"]
            ]
        ];
    } elseif (strpos($url_lower, 'femoral-hernia') !== false || strpos($title_lower, 'femoral hernia') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Femoral Hernia",
            "description" => "A groin hernia occurring in the femoral canal.",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Femoral Hernia Repair"],
                ["@type" => "MedicalProcedure", "name" => "Femoral Hernia Surgery"]
            ]
        ];
    } elseif (strpos($url_lower, 'hiatal-hernia') !== false || strpos($title_lower, 'hiatal hernia') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Hiatal Hernia",
            "description" => "A condition where part of the stomach pushes up through the diaphragm.",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Nissen Fundoplication"],
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Hiatus Hernia Repair"]
            ]
        ];
    } elseif (strpos($url_lower, 'epigastric-hernia') !== false || strpos($title_lower, 'epigastric hernia') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Epigastric Hernia",
            "description" => "A hernia occurring in the epigastric region (above the navel and below the ribcage).",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Epigastric Hernia Repair"],
                ["@type" => "MedicalProcedure", "name" => "Epigastric Hernia Surgery"]
            ]
        ];
    } elseif (strpos($url_lower, 'strangulated-hernia') !== false || strpos($title_lower, 'strangulated hernia') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Strangulated Hernia",
            "description" => "A life-threatening medical emergency where a hernia cuts off blood supply to the intestine.",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Emergency Hernia Surgery"]
            ]
        ];
    } elseif (strpos($url_lower, 'robotic') !== false || strpos($title_lower, 'robotic') !== false) {
        $schema_about = [
            "@type" => "MedicalProcedure",
            "name" => "Robotic Hernia Surgery",
            "description" => "Advanced robotic-assisted precision surgery to repair abdominal wall hernias."
        ];
    } elseif (strpos($url_lower, 'laparoscopic') !== false || strpos($title_lower, 'laparoscopic') !== false) {
        $schema_about = [
            "@type" => "MedicalProcedure",
            "name" => "Laparoscopic Hernia Surgery",
            "description" => "Minimally invasive keyhole surgery to repair groin and abdominal hernias."
        ];
    } elseif (strpos($url_lower, 'tapp') !== false || strpos($title_lower, 'tapp') !== false) {
        $schema_about = [
            "@type" => "MedicalProcedure",
            "name" => "Transabdominal Preperitoneal (TAPP) Repair",
            "description" => "A laparoscopic surgical technique where the hernia is repaired from inside the abdominal cavity."
        ];
    // 'etep' must be tested before 'tep' - "etep" contains "tep" as a substring,
    // so the looser check would otherwise claim the eTEP page and label it TEP.
    } elseif (strpos($url_lower, 'etep') !== false || strpos($title_lower, 'etep') !== false) {
        $schema_about = [
            "@type" => "MedicalProcedure",
            "name" => "Enhanced Totally Extraperitoneal (eTEP) Repair",
            "description" => "An advanced laparoscopic and robotic technique providing wider extraperitoneal access for complex hernia repairs."
        ];
    } elseif (strpos($url_lower, 'tep') !== false || strpos($title_lower, 'tep') !== false) {
        $schema_about = [
            "@type" => "MedicalProcedure",
            "name" => "Totally Extraperitoneal (TEP) Repair",
            "description" => "A laparoscopic technique where the hernia is repaired without entering the peritoneal cavity."
        ];
    } elseif (strpos($url_lower, 'diastasis') !== false || strpos($title_lower, 'diastasis') !== false) {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Diastasis Recti",
            "description" => "Separation of the rectus abdominis muscles down the midline of the abdomen.",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Diastasis Recti Repair Surgery"],
                ["@type" => "MedicalProcedure", "name" => "Robotic Diastasis Recti Repair"]
            ]
        ];
    } elseif (strpos($url_lower, 'reconstruction') !== false || strpos($title_lower, 'reconstruction') !== false) {
        $schema_about = [
            "@type" => "MedicalProcedure",
            "name" => "Abdominal Wall Reconstruction (AWR)",
            "description" => "A specialized surgery restoring the function and structure of complex abdominal wall defects."
        ];
    } else {
        $schema_about = [
            "@type" => "MedicalCondition",
            "name" => "Hernia",
            "possibleTreatment" => [
                ["@type" => "MedicalProcedure", "name" => "Laparoscopic Hernia Surgery"],
                ["@type" => "MedicalProcedure", "name" => "Robotic Hernia Surgery"]
            ]
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="kfxI6o8pHnk07vxh6FQc48BQ-xZt6jCY1Dj2nC2MynY" />

    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
    <meta name="author" content="<?= htmlspecialchars($site['doctor']) ?>">
    <meta name="robots" content="<?= htmlspecialchars($page_robots) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($page_url) ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($page_url) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($page_image) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars($site['name']) ?>">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($page_image) ?>">

    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Chennai">
    <meta name="theme-color" content="#0e7490">

    <link rel="icon" type="image/png" href="<?= $base_path ?>assets/logo/herniacare-final-logo.png">
    <link rel="apple-touch-icon" href="<?= $base_path ?>assets/logo/herniacare-final-logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50:  '#ecfeff',
                            100: '#cffafe',
                            500: '#06b6d4',
                            600: '#0891b2',
                            700: '#0e7490',
                            800: '#155e75',
                            900: '#164e63',
                            950: '#083344',
                        },
                        accent: '#f59e0b',
                    },
                    fontFamily: {
                        sans:    ['Inter', 'system-ui', 'sans-serif'],
                        display: ['"Playfair Display"', 'Georgia', 'serif'],
                    },
                },
            },
        };
    </script>

<?php
// ---------------------------------------------------------------------------
// Structured data. One @graph so every node is declared once and referenced by
// @id, instead of re-declaring the doctor as a fresh anonymous node each time.
// Node ids: #physician (the person), #clinic (the hospital), #website, #webpage.
// ---------------------------------------------------------------------------
$SITE_ROOT = rtrim($site['url'], '/') . '/';
$clinic    = $site['clinic'];

// Breadcrumbs derived from the canonical URL. A page can override by setting
// $breadcrumbs = [['name' => 'Treatments', 'url' => '...'], ...] before this include.
if (!isset($breadcrumbs)) {
    $breadcrumbs = [];
    $path = trim(parse_url($page_url, PHP_URL_PATH) ?? '', '/');
    if ($path !== '') {
        $segments = explode('/', $path);
        $built    = '';
        $last     = count($segments) - 1;
        foreach ($segments as $i => $seg) {
            $built .= $seg . '/';
            $label  = ucwords(str_replace(['-', '_'], ' ', $seg));
            if ($i === $last) {
                // Use the real page title (minus the brand suffix) for the leaf.
                $label = trim(explode('|', $page_title)[0]);
            }
            $breadcrumbs[] = ['name' => $label, 'url' => $SITE_ROOT . rtrim($built, '/')];
        }
    }
}

$physician = [
    '@type'            => 'Physician',
    '@id'              => $SITE_ROOT . '#physician',
    'name'             => $site['doctor'],
    'honorificSuffix'  => $site['credentials'],
    'jobTitle'         => $site['job_title'],
    'image'            => $SITE_ROOT . 'assets/images/dr-kumar-office-portrait.jpg',
    'url'              => $SITE_ROOT,
    'telephone'        => $site['phone'],
    'email'            => $site['email'],
    'medicalSpecialty' => ['Surgery', 'Laparoscopic Surgery', 'Robotic Surgery'],
    'knowsAbout'       => [
        'Hernia repair', 'Inguinal hernia', 'Umbilical hernia', 'Incisional hernia',
        'Ventral hernia', 'Hiatal hernia', 'Abdominal wall reconstruction',
        'eTEP repair', 'TEP repair', 'TAPP repair', 'Transversus abdominis release',
    ],
    'alumniOf'  => ['@type' => 'CollegeOrUniversity', 'name' => 'Stanley Medical College'],
    'memberOf'  => [
        ['@type' => 'Organization', 'name' => 'Royal College of Surgeons of England'],
        ['@type' => 'Organization', 'name' => 'Association of Surgeons of India'],
        ['@type' => 'Organization', 'name' => 'Indian Medical Association'],
    ],
    // Ties this domain, the general-surgery site, the GBP listing and every
    // social profile to one physician entity.
    'sameAs'    => $site['same_as'],
    'worksFor'  => ['@id' => $SITE_ROOT . '#clinic'],
    'workLocation' => ['@id' => $SITE_ROOT . '#clinic'],
];
if (!empty($site['reg_number'])) {
    $physician['identifier'] = [
        '@type' => 'PropertyValue',
        'name'  => 'Medical Council Registration',
        'value' => $site['reg_number'],
    ];
}

$clinic_node = [
    '@type'     => ['MedicalClinic', 'Hospital'],
    '@id'       => $SITE_ROOT . '#clinic',
    'name'      => $clinic['name'],
    'url'       => $SITE_ROOT,
    'telephone' => $site['phone'],
    'address'   => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $clinic['street'],
        'addressLocality' => $clinic['locality'],
        'addressRegion'   => $clinic['region'],
        'postalCode'      => $clinic['postal'],
        'addressCountry'  => $clinic['country'],
    ],
    'hasMap'     => $clinic['map_url'],
    'priceRange' => '$$',
    'medicalSpecialty' => ['Surgery', 'Laparoscopic Surgery', 'Robotic Surgery'],
    'availableService' => [
        ['@type' => 'MedicalProcedure', 'name' => 'Laparoscopic hernia repair'],
        ['@type' => 'MedicalProcedure', 'name' => 'Robotic hernia repair'],
        ['@type' => 'MedicalProcedure', 'name' => 'Open hernia repair'],
        ['@type' => 'MedicalProcedure', 'name' => 'Abdominal wall reconstruction'],
    ],
    'areaServed' => ['@type' => 'City', 'name' => 'Chennai'],
    'openingHoursSpecification' => [
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens'     => '09:00',
            'closes'    => '19:00',
        ],
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Saturday'],
            'opens'     => '09:00',
            'closes'    => '17:00',
        ],
    ],
];
if ($clinic['latitude'] !== '' && $clinic['longitude'] !== '') {
    $clinic_node['geo'] = [
        '@type'     => 'GeoCoordinates',
        'latitude'  => $clinic['latitude'],
        'longitude' => $clinic['longitude'],
    ];
}

$webpage = [
    '@type'       => 'MedicalWebPage',
    '@id'         => $page_url . '#webpage',
    'url'         => $page_url,
    'name'        => $page_title,
    'description' => $page_description,
    'inLanguage'  => 'en-IN',
    'isPartOf'    => ['@id' => $SITE_ROOT . '#website'],
    'author'      => ['@id' => $SITE_ROOT . '#physician'],
    'reviewedBy'  => ['@id' => $SITE_ROOT . '#physician'],
    'provider'    => ['@id' => $SITE_ROOT . '#clinic'],
    'audience'    => ['@type' => 'Patient'],
];
if (!empty($schema_about)) {
    $webpage['about'] = $schema_about;
}
// Pages set these before the include; blog posts should always set both.
if (!empty($page_published)) { $webpage['datePublished'] = $page_published; }
if (!empty($page_modified))  { $webpage['dateModified']  = $page_modified; }
if (!empty($page_reviewed))  { $webpage['lastReviewed']  = $page_reviewed; }
if ($breadcrumbs) {
    $webpage['breadcrumb'] = ['@id' => $page_url . '#breadcrumb'];
}

$graph = [
    [
        '@type'     => 'WebSite',
        '@id'       => $SITE_ROOT . '#website',
        'url'       => $SITE_ROOT,
        'name'      => $site['name'],
        'inLanguage'=> 'en-IN',
        'publisher' => ['@id' => $SITE_ROOT . '#physician'],
        'about'     => ['@id' => $SITE_ROOT . '#physician'],
    ],
    $physician,
    $clinic_node,
    $webpage,
];

if ($breadcrumbs) {
    $items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $SITE_ROOT]];
    foreach ($breadcrumbs as $i => $crumb) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 2,
            'name'     => $crumb['name'],
            'item'     => $crumb['url'],
        ];
    }
    $graph[] = [
        '@type'           => 'BreadcrumbList',
        '@id'             => $page_url . '#breadcrumb',
        'itemListElement' => $items,
    ];
}

$schema_payload = ['@context' => 'https://schema.org', '@graph' => $graph];
?>
    <script type="application/ld+json">
<?= json_encode($schema_payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>

    </script>

    <style>
        html { scroll-behavior: smooth; scroll-padding-top: 80px; }
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }

        /* ===== Top thin bar ===== */
        .topbar { background: #0f172a; color: #cbd5e1; font-size: 13px; }
        .topbar a:hover { color: #f59e0b; }

        /* ===== Header ===== */
        .site-header {
            position: fixed !important;
            top: 0; left: 0; right: 0;
            z-index: 50;
            background: transparent !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15) !important;
            transition: all 0.3s ease !important;
        }
        .site-header.scrolled {
            box-shadow: 0 4px 20px -4px rgba(15, 23, 42, 0.1) !important;
            background: rgba(255, 255, 255, 0.98) !important;
            border-bottom: 1px solid #f1f5f9 !important;
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        /* Transparent Header State Nav Link Colors */
        .site-header:not(.scrolled) .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
        }
        .site-header:not(.scrolled) .nav-link:hover,
        .site-header:not(.scrolled) .nav-link.active {
            color: #ffffff !important;
        }
        .site-header:not(.scrolled) .nav-link svg {
            color: #ffffff !important;
        }
        .site-header:not(.scrolled) .hamburger span {
            background-color: #ffffff !important;
        }
        .site-header:not(.scrolled) nav a img {
            filter: brightness(0) invert(1) !important;
        }

        /* Remove bg patterns from subpage hero sections */
        body.sub-page section:first-of-type svg defs,
        body.sub-page section:first-of-type svg pattern,
        body.sub-page section:first-of-type svg rect[fill*="url"] {
            display: none !important;
        }

        /* ===== Nav links ===== */
        .nav-link {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            padding: 0.5rem 0.75rem;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #334155;
            transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            white-space: nowrap;
        }
        .nav-link:hover, .nav-link.active { color: #0e7490; }
        .nav-link::after {
            content: '';
            position: absolute;
            left: 0.75rem;
            right: 0.75rem;
            bottom: 0.15rem;
            height: 2px;
            background: #0e7490;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-link:hover::after, .nav-link.active::after { transform: scaleX(1); }

        /* ===== Dropdown ===== */
        .has-dropdown { position: relative; }
        .dropdown {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(12px) scale(0.95);
            min-width: 580px;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.15);
            padding: 1.5rem;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            border-top: 4px solid #0e7490;
        }
        .has-dropdown:hover .dropdown { 
            opacity: 1; 
            visibility: visible; 
            transform: translateX(-50%) translateY(0) scale(1); 
        }
        .dropdown::before {
            content: '';
            position: absolute;
            top: -11px;
            left: 50%;
            transform: translateX(-50%);
            width: 18px;
            height: 18px;
            background: #0e7490;
            clip-path: polygon(50% 0, 100% 100%, 0 100%);
        }

        /* ===== Search ===== */
        .icon-btn {
            width: 40px; height: 40px;
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: 9999px;
            color: #334155;
            transition: all 0.2s ease;
        }
        .icon-btn:hover { background: #f1f5f9; color: #0e7490; }

        /* ===== CTA ===== */
        .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, #0e7490, #0891b2);
            color: white;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            padding: 0.65rem 1.4rem;
            border-radius: 9999px;
            box-shadow: 0 4px 12px rgba(14, 116, 144, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            white-space: nowrap;
        }
        .cta-btn:hover { 
            background: linear-gradient(135deg, #0891b2, #06b6d4); 
            transform: translateY(-2px); 
            box-shadow: 0 8px 24px rgba(14, 116, 144, 0.35); 
        }

        /* ===== Search overlay ===== */
        .search-panel {
            position: absolute;
            top: 100%;
            left: 0; right: 0;
            background: white;
            box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.15);
            opacity: 0; visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.25s ease;
        }
        .search-panel.open { opacity: 1; visibility: visible; transform: translateY(0); }

        /* ===== Hamburger ===== */
        .hamburger span { transition: all 0.35s cubic-bezier(0.68,-0.55,0.27,1.55); transform-origin: center; }
        .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        /* ===== Mobile drawer ===== */
        .mobile-overlay { position: fixed; inset: 0; background: rgba(15, 23, 42, 0.5); backdrop-filter: blur(4px); opacity: 0; visibility: hidden; transition: all 0.3s ease; z-index: 60; }
        .mobile-overlay.open { opacity: 1; visibility: visible; }
        .mobile-drawer {
            position: fixed; top: 0; right: 0;
            width: min(85vw, 380px); height: 100vh;
            background: white;
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 70;
            display: flex; flex-direction: column;
            box-shadow: -20px 0 60px -20px rgba(15, 23, 42, 0.25);
        }
        .mobile-drawer.open { transform: translateX(0); }
        .mobile-link {
            display: flex; align-items: center; justify-content: space-between;
            padding: 0.95rem 1.25rem;
            font-size: 13px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase;
            color: #334155;
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.2s ease;
        }
        .mobile-link:hover { background: #f8fafc; color: #0e7490; padding-left: 1.5rem; }

        /* Custom background image for subpage hero sections */
        body.sub-page section:first-of-type,
        body.sub-page main > section:first-of-type {
            position: relative !important;
            background-image: linear-gradient(rgba(15, 23, 42, 0.40), rgba(15, 23, 42, 0.40)), linear-gradient(to bottom right, rgba(14, 116, 144, 0.60), rgba(15, 23, 42, 0.80)), url('<?= $base_path ?>assets/images/bg-breadcrumb.png?v=2') !important;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-blend-mode: normal !important;
            padding-top: 110px !important;
        }

        /* FAQ Premium Toggles */
        .faq-item.active {
            background-color: #0e7490 !important; /* bg-brand-700 */
            color: #ffffff !important;
            border-color: transparent !important;
            box-shadow: 0 10px 25px -5px rgba(14, 116, 144, 0.3), 0 8px 10px -6px rgba(14, 116, 144, 0.3) !important;
        }
        .faq-item.active .faq-toggle span {
            color: #ffffff !important;
        }
        .faq-item.active .faq-symbol {
            background-color: #083344 !important; /* bg-brand-950 */
            color: #ffffff !important;
        }
        .faq-item.active .faq-content {
            display: block !important;
        }
        .faq-item.active .faq-content p,
        .faq-item.active .faq-content ul,
        .faq-item.active .faq-content li,
        .faq-item.active .faq-content strong,
        .faq-item.active .faq-content span {
            color: #ecfeff !important;
        }
        .faq-item.active .faq-content div.bg-slate-200 {
            background-color: rgba(255, 255, 255, 0.2) !important;
        }

        /* Light FAQ items inside dark sections - make them white for visibility */
        .bg-brand-950 .faq-item:not(.active),
        .bg-slate-900 .faq-item:not(.active),
        [class*="bg-brand-950"] .faq-item:not(.active),
        [class*="bg-slate-900"] .faq-item:not(.active) {
            background-color: rgba(255, 255, 255, 0.12) !important;
            border-color: rgba(255, 255, 255, 0.2) !important;
        }
        .bg-brand-950 .faq-item:not(.active) .faq-toggle span,
        .bg-slate-900 .faq-item:not(.active) .faq-toggle span,
        [class*="bg-brand-950"] .faq-item:not(.active) .faq-toggle span,
        [class*="bg-slate-900"] .faq-item:not(.active) .faq-toggle span {
            color: #ffffff !important;
        }
        .bg-brand-950 .faq-item:not(.active) .faq-symbol,
        .bg-slate-900 .faq-item:not(.active) .faq-symbol,
        [class*="bg-brand-950"] .faq-item:not(.active) .faq-symbol,
        [class*="bg-slate-900"] .faq-item:not(.active) .faq-symbol {
            background-color: rgba(255, 255, 255, 0.15) !important;
            color: #ffffff !important;
        }
        .bg-brand-950 .faq-item:not(.active) .faq-content p,
        .bg-slate-900 .faq-item:not(.active) .faq-content p,
        [class*="bg-brand-950"] .faq-item:not(.active) .faq-content p,
        [class*="bg-slate-900"] .faq-item:not(.active) .faq-content p {
            color: #f1f5f9 !important; /* text-slate-100 */
        }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased <?= ($is_home ?? false) ? 'home-page' : 'sub-page' ?>">

<!-- ============== MAIN HEADER (Medicoz-style) ============== -->
<header class="site-header">
    <div class="relative max-w-[1400px] mx-auto px-4 lg:px-6">
        <nav class="flex items-center justify-between gap-6 py-3">

            <!-- LOGO -->
            <a href="<?= $base_path ?>" class="flex items-center shrink-0">
                <img src="<?= $base_path ?>assets/logo/herniacare-final-logo.png" alt="Dr. Kumar" width="260" height="70" class="h-20 w-auto">
            </a>

            <!-- DESKTOP NAV -->
            <ul class="hidden lg:flex items-center flex-nowrap gap-1 xl:gap-2">
                <?php 
                $current_page = basename($_SERVER['SCRIPT_NAME'] ?? '');
                $current_name = preg_replace('/\.php$/i', '', $current_page);
                $is_blog_section = (strpos($_SERVER['SCRIPT_NAME'] ?? '', '/blog') !== false);
                foreach ($headerMenu as $item):
                    $hasDropdown = isset($item['dropdown']);
                    $isActive = false;
                    $item_link_name = isset($item['link']) ? preg_replace('/\.php$/i', '', basename($item['link'])) : '';
                    if (!empty($item_link_name) && $item_link_name === $current_name) {
                        $isActive = true;
                    } elseif (!empty($item_link_name) && $item_link_name === 'blog' && $is_blog_section) {
                        $isActive = true;
                    } elseif ($hasDropdown) {
                        foreach ($item['dropdown'] as $col) {
                            foreach ($col['links'] as $sublink) {
                                $sub_link_name = preg_replace('/\.php$/i', '', basename($sublink['link']));
                                if ($sub_link_name === $current_name) {
                                    $isActive = true;
                                    break 2;
                                }
                            }
                        }
                    }
                ?>
                    <li class="<?= $hasDropdown ? 'has-dropdown' : '' ?>">
                        <?php if (!$hasDropdown): ?>
                            <a href="<?= $base_path . $item['link'] ?>" class="nav-link <?= $isActive ? 'active' : '' ?>">
                                <?= $item['label'] ?>
                            </a>
                        <?php else: ?>
                            <a href="#" class="nav-link <?= $isActive ? 'active' : '' ?>" onclick="event.preventDefault();">
                                <?= $item['label'] ?>
                                <svg class="w-3.5 h-3.5 text-brand-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </a>
                            
                            <?php 
                            $colsCount = count($item['dropdown']);
                            $dropdownStyle = "";
                            if ($colsCount === 1) {
                                $dropdownStyle = "min-width: 280px; width: 280px;";
                            } elseif ($colsCount === 2) {
                                $dropdownStyle = "min-width: 560px; width: 560px;";
                            } else {
                                $dropdownStyle = "min-width: 820px; width: 820px;";
                            }
                            ?>
                            <div class="dropdown" style="<?= $dropdownStyle ?>">
                                <div class="grid <?= $colsCount === 1 ? 'grid-cols-1' : ($colsCount === 2 ? 'grid-cols-2' : 'grid-cols-3') ?> gap-6">
                                    <?php foreach ($item['dropdown'] as $col): ?>
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-wider text-brand-700 mb-3 border-b border-slate-100 pb-1.5"><?= $col['title'] ?></p>
                                            <div class="flex flex-col gap-1">
                                                <?php foreach ($col['links'] as $link):
                                                    $isSubActive = (basename($link['link']) === $current_page);
                                                ?>
                                                    <a href="<?= $base_path . $link['link'] ?>" class="flex items-center gap-1.5 px-2.5 py-2 rounded-md text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition <?= $isSubActive ? 'bg-brand-50/50 text-brand-700 font-medium' : '' ?>">
                                                        <svg class="w-3 h-3 text-brand-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                                        <span><?= $link['label'] ?></span>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>

                                            <?php if (!empty($col['subsection'])): ?>
                                                <p class="text-[11px] font-bold uppercase tracking-wider text-accent mt-4 mb-2 border-b border-slate-100 pb-1.5 flex items-center gap-1.5">
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                                                    <?= $col['subsection']['title'] ?>
                                                </p>
                                                <div class="flex flex-col gap-1">
                                                    <?php foreach ($col['subsection']['links'] as $link):
                                                        $isSubSubActive = (basename($link['link']) === $current_page);
                                                    ?>
                                                        <a href="<?= $base_path . $link['link'] ?>" class="flex items-center gap-1.5 px-2.5 py-2 rounded-md text-sm text-slate-700 hover:bg-amber-50 hover:text-accent transition <?= $isSubSubActive ? 'bg-amber-50/50 text-accent font-medium' : '' ?>">
                                                            <svg class="w-3 h-3 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                                                            <span><?= $link['label'] ?></span>
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- RIGHT: CTA -->
            <div class="flex items-center gap-1">
                <span class="hidden md:block w-px h-6 bg-slate-200 mx-2"></span>
                <a href="<?= $base_path ?>book-appointment" class="cta-btn hidden md:inline-flex">
                    Appointment
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>

                <button id="navToggle" class="hamburger lg:hidden flex flex-col justify-center items-center w-11 h-11 rounded-md hover:bg-slate-100 transition ml-1" aria-label="Toggle menu" aria-expanded="false">
                    <span class="block w-5 h-0.5 bg-slate-700 mb-1"></span>
                    <span class="block w-5 h-0.5 bg-slate-700 mb-1"></span>
                    <span class="block w-5 h-0.5 bg-slate-700"></span>
                </button>
            </div>
        </nav>

    </div>
</header>

<!-- ============== MOBILE DRAWER ============== -->
<div id="mobileOverlay" class="mobile-overlay lg:hidden"></div>
<aside id="mobileDrawer" class="mobile-drawer lg:hidden">
    <div class="flex items-center justify-between px-5 py-4 border-b border-slate-100">
        <img src="<?= $base_path ?>assets/logo/herniacare-final-logo.png" alt="Logo" class="h-14 w-auto">
        <button id="drawerClose" class="w-10 h-10 rounded-xl bg-slate-100 hover:bg-slate-200 flex items-center justify-center transition" aria-label="Close menu">
            <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto px-4 py-4 space-y-2 select-none">
        <?php foreach ($headerMenu as $index => $item):
            $hasDropdown = isset($item['dropdown']);
        ?>
            <?php if (!$hasDropdown): ?>
                <a href="<?= $base_path . $item['link'] ?>" class="mobile-link rounded-lg hover:bg-slate-50 js-drawer-close">
                    <span><?= $item['label'] ?></span>
                </a>
            <?php else: ?>
                <div class="mobile-accordion">
                    <button class="mobile-accordion-btn mobile-link w-full text-left flex items-center justify-between rounded-lg hover:bg-slate-50 transition" data-target="mob-ac-<?= $index ?>">
                        <span><?= $item['label'] ?></span>
                        <svg class="w-4 h-4 text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="mob-ac-<?= $index ?>" class="mobile-accordion-content hidden pl-4 pr-2 py-2 space-y-3 bg-slate-50/55 border-l-2 border-brand-600 rounded-r-lg mt-1">
                        <?php foreach ($item['dropdown'] as $col): ?>
                            <div class="space-y-1">
                                <p class="text-[11px] font-bold uppercase tracking-wider text-brand-700 px-2 mt-2 first:mt-0"><?= $col['title'] ?></p>
                                <?php foreach ($col['links'] as $link): ?>
                                    <a href="<?= $base_path . $link['link'] ?>" class="flex items-center justify-between py-2 px-3 rounded-md text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700 transition js-drawer-close">
                                        <span><?= $link['label'] ?></span>
                                        <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </a>
                                <?php endforeach; ?>

                                <?php if (!empty($col['subsection'])): ?>
                                    <p class="text-[10px] font-bold uppercase tracking-wider text-accent px-2 mt-3 mb-1"><?= $col['subsection']['title'] ?></p>
                                    <?php foreach ($col['subsection']['links'] as $link): ?>
                                        <a href="<?= $base_path . $link['link'] ?>" class="flex items-center justify-between py-2 px-3 rounded-md text-sm text-slate-600 hover:bg-amber-50 hover:text-accent transition js-drawer-close">
                                            <span><?= $link['label'] ?></span>
                                            <svg class="w-3.5 h-3.5 text-accent/60" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.446a1 1 0 00-.363 1.118l1.287 3.957c.3.922-.755 1.688-1.539 1.118l-3.37-2.446a1 1 0 00-1.175 0l-3.37 2.446c-.783.57-1.838-.197-1.538-1.118l1.287-3.957a1 1 0 00-.363-1.118L2.05 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/></svg>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>

    <div class="border-t border-slate-100 p-5 space-y-3 bg-slate-50">
        <a href="tel:<?= $site['phone_link'] ?>" class="flex items-center gap-3 bg-white rounded-xl p-3 shadow-sm">
            <span class="w-10 h-10 rounded-xl bg-brand-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-700" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
            </span>
            <span class="leading-tight">
                <span class="block text-xs text-slate-500">Call us</span>
                <span class="block font-bold text-brand-800"><?= $site['phone'] ?></span>
            </span>
        </a>
        <a href="<?= $base_path ?>book-appointment" class="flex items-center justify-center gap-2 bg-gradient-to-r from-accent to-amber-500 text-white font-semibold py-3.5 rounded-xl shadow-md hover:shadow-lg transition">
            Book Appointment
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</aside>

<script>
    (function () {
        var toggle       = document.getElementById('navToggle');
        var drawer       = document.getElementById('mobileDrawer');
        var overlay      = document.getElementById('mobileOverlay');
        var closeBtn     = document.getElementById('drawerClose');
        var header       = document.querySelector('.site-header');

        function setMenu(open) {
            drawer.classList.toggle('open', open);
            overlay.classList.toggle('open', open);
            toggle.classList.toggle('open', open);
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            document.body.style.overflow = open ? 'hidden' : '';
        }
        toggle.addEventListener('click', function () { setMenu(!drawer.classList.contains('open')); });
        closeBtn.addEventListener('click', function () { setMenu(false); });
        overlay.addEventListener('click', function () { setMenu(false); });
        document.querySelectorAll('.js-drawer-close').forEach(function (a) {
            a.addEventListener('click', function () { setMenu(false); });
        });

        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 20);
        });

        // Mobile Accordion Toggle
        document.querySelectorAll('.mobile-accordion-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var targetId = this.getAttribute('data-target');
                var content = document.getElementById(targetId);
                var icon = this.querySelector('svg');
                
                var isOpen = !content.classList.contains('hidden');
                
                // Optional: Close all other accordion sections to avoid clutter
                document.querySelectorAll('.mobile-accordion-content').forEach(function (c) {
                    if (c.id !== targetId) {
                        c.classList.add('hidden');
                    }
                });
                document.querySelectorAll('.mobile-accordion-btn').forEach(function (b) {
                    if (b !== btn) {
                        var otherIcon = b.querySelector('svg');
                        if (otherIcon) otherIcon.classList.remove('rotate-180');
                    }
                });
                
                if (isOpen) {
                    content.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                } else {
                    content.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                }
            });
        });
    })();
</script>
