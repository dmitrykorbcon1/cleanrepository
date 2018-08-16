<?php

require __DIR__ . '/autoload.php';

    $uri = $_SERVER['REQUEST_URI'];

    $parts = explode('/', $uri);

    if (file_exists( __DIR__ . '/App/Controllers/' . $parts[2] . '.php')) { //проверяем, есть ли контроллер с таким именем в директории Controllers
        $name = ucfirst($parts[2]);
    } else {
        $name = 'Index';  //если его нет - редирект на главную
    }

    $class = '\App\Controllers\\' . $name;
try {
    $ctrl = new $class;
    $ctrl->dispatch();
} catch (\App\DbException | \App\NotFound $exception) {
    $log = new \App\Loger( __DIR__ . '/log.txt'); //по заданию логируем только исключения п.1-3

    $log->writeLog($exception->getMessage(),$exception->getFile());

    $error = new \App\Controllers\Error();

    $error->setMessage($exception->getMessage());

    $error->dispatch();
} catch (\App\MultiException $exception) {
    $collect = [];

    foreach ($exception->all() as $error) {
        $collect[] = $error->getMessage();
    }

    $error = new \App\Controllers\Error();

    $error->setMessage($collect);

    $error->dispatch();

}