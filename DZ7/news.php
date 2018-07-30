<?php

require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

$news = new News( __DIR__ . '/news.txt');

//$art = new Article('Статья 5', 'Аннотация статьи 5', 'Текст статьи 5');
//$news->addArticle( $art );
//$news->saveNews();

$view = new View();

$view->assign('articles', $news->getArticles() );

$view->display( __DIR__ . '/templates/news.php');


