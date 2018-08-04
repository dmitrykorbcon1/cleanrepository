<?php

require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';


$news = new News();

$view = new View;

if ( isset( $_GET['id'] ) ) {   //если id задан
    $id = $_GET['id'];      //кладём его в переменную id
    $article = $news->getArticleById($id);

    if (null !== $article) {

        $view->assign( 'article',  $article );

    } else {

        header('Location: /DZ8/index.php');
        exit;

    }
}

//if ( !isset( $art ) ) {
  //  $view->assign('head', 'Статья отсутствует' );
    //$view->assign( 'text',  '' );
    //$view->assign( 'author', '' );
//}

$view->display( __DIR__ . '/templates/article.php' );




