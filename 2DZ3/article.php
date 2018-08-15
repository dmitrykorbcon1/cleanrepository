<?php

require __DIR__ . '/autoload.php';

if ( isset( $_GET['id'] ) ) { //если id получен
    if (is_numeric( $_GET['id'] )) {  //если в id числовое значение

        $article = \App\Models\Article::findById( $_GET['id'] );
    }
 }

if ( false === $article ) {  //в случае ошибки-редирект на главную страницу

  header('Location: /2DZ3/index.php');
  exit;
}

$view = new \App\View();

$view->article = $article;

$view->display( __DIR__ . '/templates/article.php');

