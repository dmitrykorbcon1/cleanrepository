<?php

require __DIR__ . '/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$parts = explode('/', $uri);

$path = __DIR__ . '/App/Controllers/' . ucfirst($parts[2]) . '.php';

if (file_exists($path)) {
    $name = ucfirst($parts[2]);
} else {
    $name = 'Index';
}

$class = '\App\Controllers\\' . $name;

$ctrl = new $class;

$ctrl->dispatch();
