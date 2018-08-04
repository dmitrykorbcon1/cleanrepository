<?php

require __DIR__ . '/../classes/View.php';

$list = scandir( __DIR__ . '/Photo');

$list = array_diff($list, ['.', '..']);

$view = new View;

$view->assign('images', $list);

$view->display( __DIR__ . '/../templates/gallery/index.php');

