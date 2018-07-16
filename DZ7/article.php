<?php

require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

$news = new News( __DIR__ . '/news.txt');

$view = new View();

if ( isset( $_GET['id'] ) ) {

    $e = $news->getArticles();

    if ( isset( $e[ $_GET['id'] ] ) ) {

    $art = $e[ $_GET['id'] ];

    $view->assign('head', $art->getHead() );

    $view->assign('text', $art->getText() );

    }
}

if ( !isset($art) ) {

    $view->assign('head', 'Статья отсутствует.' );

    $view->assign('text', '' );

}

$view->display( __DIR__ . '/templates/article.php');


