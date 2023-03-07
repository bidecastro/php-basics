<?php

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort() {
    http_response_code(404);
    require 'views/404.php';
    die();
}