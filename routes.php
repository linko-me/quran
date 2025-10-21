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

$url = isset($_GET['url']) ? '/' . rtrim($_GET['url'], '/') : '/';
$url_parts = explode('/', $url);

if (array_key_exists($url, $routes)) {
    include $routes[$url];
} elseif (isset($url_parts[1]) && array_key_exists('/' . $url_parts[1], $routes)) {
    $_GET['id'] = $url_parts[2];
    include $routes['/' . $url_parts[1]];
} else {
    http_response_code(404);
    include 'pages/404.php';
}
?>