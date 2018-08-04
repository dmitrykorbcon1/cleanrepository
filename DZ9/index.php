<?php

require __DIR__ . '/autoload.php';

$view = new \App\Models\View;

$text = new \App\Models\TextFile( __DIR__ . '/text/headText.txt' );

$view->assign( 'text', $text->getData() );

$view->display( __DIR__ . '/templates/index.php' );