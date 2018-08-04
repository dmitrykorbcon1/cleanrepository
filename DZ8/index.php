<?php

require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

$news = new News();

$view = new View();

$articles = $news->getArticles();

$view->assign( 'articles', $articles );

$view->display( __DIR__ . '/templates/index.php' );




