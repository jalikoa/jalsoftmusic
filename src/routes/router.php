<?php
require_once '../src/helpers/auth.php';
$routes = [
    '/enter' => './index.html',
    '/enter/home' => './index.html',
    '/enter/about' => './about.html',
    '/enter/contact' => './contact.html',
    '/enter/search' => './search.html',
    '/enter/playlist' => './playlist.html',
    '/enter/profile' => './profile.html',
    '/enter/musicplayer' => './musicplayer.html',
    '/enter/download' => './download.html',
    '/enter/privacy' => './privacy.html',
    '/enter/blog' => './blog.html',
    '/enter/terms' => './terms.html',
    '/enter/error' => './error.html',
    '/enter/login' => './login.html',
    '/enter/register' => './signup.html'
];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (array_key_exists($requestUri, $routes)) {
    include $routes[$requestUri];
} else {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    header("location: /enter/error");
}
?>
