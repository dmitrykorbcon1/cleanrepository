<?php

require __DIR__ . '/autoload.php';

$articles = \App\Models\Article::findAll();

$view = new \App\View();

$view->articles = $articles;

//var_dump($view->rewind());

$view->display( __DIR__ . '/templates/index.php');
