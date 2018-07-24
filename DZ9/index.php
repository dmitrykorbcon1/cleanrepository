<?php

require __DIR__ . '/autoload.php';

$view = new \App\Models\View;

$txt = new \App\Models\TextFile( __DIR__ . '/text/headText.txt' );

$view->assign( 'text', $txt->getData() );

$view->display( __DIR__ . '/templates/index.php' );