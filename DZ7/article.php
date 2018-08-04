<?php

require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

$news = new News( __DIR__ . '/news.txt');

$view = new View();

if ( isset( $_GET['id'] ) ) {

    if ( isset( $news->getArticles()[ $_GET['id'] ] ) ) {

        $article = $news->getArticles()[ $_GET['id'] ];

        $view->assign('article', $article );

        } else {

        die('Статья не существует!');
    }
}

$view->display( __DIR__ . '/templates/article.php');


