<?php

require __DIR__ . '/autoload.php';

use App\Models\Article;

$view = new \App\View();

$view->data = \App\Models\Article::findAll();

$view->display( __DIR__ . '/templates/admin.php');

