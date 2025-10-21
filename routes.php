<?php
$routes = [
    '/' => 'pages/home.php',
    '/surahs' => 'pages/surahs.php',
    '/juzs' => 'pages/juzs.php',
    '/surah' => 'pages/surah_viewer.php',
    '/juz' => 'pages/juz_viewer.php',
    '/search' => 'pages/search.php',
    '/login' => 'pages/login.php',
    '/signup' => 'pages/signup.php',
    '/logout' => 'pages/logout.php',
];

// Get the requested URL path
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = rtrim($request_uri, '/');
if ($url === '') {
    $url = '/';
}

$url_parts = explode('/', $url);

// Check for simple routes first
if (array_key_exists($url, $routes)) {
    include $routes[$url];
}
// Check for routes with parameters (e.g., /surah/1)
elseif (isset($url_parts[1]) && array_key_exists('/' . $url_parts[1], $routes) && isset($url_parts[2])) {
    // This is a bit of a hack to pass the ID. A more robust router would handle this better.
    // For our app, we'll just put the ID into the $_GET superglobal so the viewer pages can find it.
    $_GET['id'] = $url_parts[2];
    include $routes['/' . $url_parts[1]];
} else {
    http_response_code(404);
    include 'pages/404.php';
}
?>