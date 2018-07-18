<?php

require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';


$news = new News( __DIR__ . '/configs/config.php');

$view = new View;

$view->assign( 'articles', $news->getArticles() );

//var_dump($news->getArticles());

$view->display( __DIR__ . '/templates/index.php' );




