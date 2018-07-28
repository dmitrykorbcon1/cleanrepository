<?php

require __DIR__ . '/autoload.php';

if ( isset( $_GET['id'] ) ) { //если id получен
    if (is_numeric( $_GET['id'] )) {  //если в id числовое значение

        $data = \App\Models\Article::findById( $_GET['id'] );
    }
}

$head = $data->getHead();  // в шаблоне будут доступны переменные $head, $text, $author

$text = $data->getText();

$author = $data->getAuthor();

if ( !isset($data) ) {  //в случае ошибки-редирект на главную страницу

  header('Location: /2DZ1/index.php');
  exit;
}

include __DIR__ . '/templates/article.php';





