<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$queryString = $query ? '?' . $query : '';

// 1. Force 301 redirect for direct requests ending with .php
if ($uri && str_ends_with(strtolower($uri), '.php') && $uri !== '/build.php') {
    $cleanPath = preg_replace('/\.php$/i', '', $uri);
    if ($cleanPath === '/index') {
        $cleanPath = '/';
    }
    // Check if it's a moved location page first
    if (preg_match('#^/treatment/(hernia-surgeon-in-(?!chennai)[a-z-]+)$#i', $cleanPath, $matches)) {
        header("Location: /" . $matches[1] . $queryString, true, 301);
        exit;
    }
    if (preg_match('#^/treatment/(laparoscopic-hernia-surgery-in-(?!tamil-nadu)[a-z-]+)$#i', $cleanPath, $matches)) {
        header("Location: /" . $matches[1] . $queryString, true, 301);
        exit;
    }
    header("Location: " . $cleanPath . $queryString, true, 301);
    exit;
}

// 1b. 301 Redirects for moved location pages (from /treatment/ to root)
if (preg_match('#^/treatment/(hernia-surgeon-in-(?!chennai)[a-z-]+)/?$#i', $uri, $matches)) {
    header("Location: /" . $matches[1] . $queryString, true, 301);
    exit;
}
if (preg_match('#^/treatment/(laparoscopic-hernia-surgery-in-(?!tamil-nadu)[a-z-]+)/?$#i', $uri, $matches)) {
    header("Location: /" . $matches[1] . $queryString, true, 301);
    exit;
}

// 1c. 301 Redirects for legacy URLs
$legacyRedirects = [
    '/my_types/inguinal-hernia' => '/my_types/inguinal-hernia-treatment-in-chennai',
    '/my_types/inguinal-hernia-surgery-in-chennai' => '/my_types/inguinal-hernia-treatment-in-chennai',
    '/my_types/umbilical-hernia-surgery-in-chennai' => '/my_types/umbilical-hernia-treatment-in-chennai',
    '/my_types/incisional-hernia-surgery-in-chennai' => '/my_types/incisional-hernia-treatment-in-chennai',
    '/my_types/ventral-hernia-surgery-in-chennai' => '/my_types/ventral-hernia-treatment-in-chennai',
    '/my_types/femoral-hernia-surgery-in-chennai' => '/my_types/femoral-hernia-treatment-in-chennai',
    '/treatment/tapp-repair' => '/treatment/tapp-repair-in-chennai',
    '/treatment/hernia-surgery-in-chennai' => '/treatment/hernia-surgeon-in-chennai',
    '/treatment/hernia-surgery' => '/treatment/hernia-surgeon-in-chennai',
    '/about-us' => '/about-best-hernia-hospital-in-chennai',
];

$trimmedUri = rtrim($uri, '/');
if (isset($legacyRedirects[$trimmedUri])) {
    header("Location: " . $legacyRedirects[$trimmedUri] . $queryString, true, 301);
    exit;
}

$path = __DIR__ . $uri;

// 2. Serve static assets directly (css, js, images, etc.)
if ($uri !== '/' && file_exists($path) && !is_dir($path)) {
    return false;
}

// 3. Clean PHP URLs (e.g. /treatment/hernia-surgeon-in-annanagar -> treatment/hernia-surgeon-in-annanagar.php)
if (file_exists($path . '.php')) {
    require $path . '.php';
    return true;
}

// 4. Directory index
if (is_dir($path) && file_exists(rtrim($path, '/') . '/index.php')) {
    require rtrim($path, '/') . '/index.php';
    return true;
}

return false;
