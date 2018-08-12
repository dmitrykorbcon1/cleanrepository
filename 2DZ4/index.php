<?php

require __DIR__ . '/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$parts = explode('/', $uri);

if (file_exists( __DIR__ . '/App/Controllers/'. $parts[2] . '.php' ) ) { //проверяем, есть ли контроллер с таким именем в директории Controllers
    $name = ucfirst($parts[2]);
} else {
    $name = 'Index';  //если его нет - редирект на главную
}

$class = '\App\Controllers\\' . $name;

$ctrl = new $class;

$ctrl->dispatch();
