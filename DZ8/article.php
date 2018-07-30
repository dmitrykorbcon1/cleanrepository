<?php

require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';


$news = new News( __DIR__ . '/configs/config.php');

$view = new View;

if ( isset( $_GET['id'] ) ) {   //если id задан

    $id = $_GET['id'];      //кладём его в переменную id

    $art = $news->getArticleById($id);

    if (null !== $art) {

        $view->assign( 'head',  $art->getHead() );
        $view->assign( 'text',  $art->getText() );
        $view->assign( 'author', $art->getAuthor() );

    }
}

if ( !isset( $art ) ) {
    $view->assign('head', 'Статья отсутствует' );
    $view->assign( 'text',  '' );
    $view->assign( 'author', '' );
}


$view->display( __DIR__ . '/templates/article.php' );




