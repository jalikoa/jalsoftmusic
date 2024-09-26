<?php
session_start();
require_once '../helpers/auth.php';
$routes = [
    '/enter' => '../../public/index.html',
    '/enter/home' => '../../public/index.html',
    '/enter/about' => '../../public/about.html',
    '/enter/contact' => '../../public/contact.html',
    '/enter/search' => '../../public/search.html',
    '/enter/playlist' => '../../public/playlist.html',
    '/enter/profile' => '../../public/profile.html',
    '/enter/musicplayer' => '../../public/musicplayer.html',
    '/enter/download' => '../../public/download.html',
    '/enter/privacy' => '../../public/privacy.html',
    '/enter/blog' => '../../public/blog.html',
    '/enter/terms' => '../../public/terms.html',
    '/enter/error' => '../../public/error.html',
    '/enter/login' => '../../public/login.html'
];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (array_key_exists($requestUri, $routes)) {
    include $routes[$requestUri];
} else {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    header("location: http://localhost/enter/error");
}
?>
