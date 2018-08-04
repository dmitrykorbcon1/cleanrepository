<?php

require __DIR__ . '/../autoload.php';

$gall = new \App\Models\Gallery( __DIR__ . '/Photo');

$view = new \App\Models\View;

$view->assign( 'images', $gall->getImageList() );

$view->display( __DIR__ . '/../templates/gallery/gallery.php' );