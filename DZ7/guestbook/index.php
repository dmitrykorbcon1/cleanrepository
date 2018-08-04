<?php

require __DIR__ . '/../classes/View.php';

require __DIR__ . '/../classes/GuestBook.php';

$gbook = new GuestBook( __DIR__ . '/guestbook.txt');

$view = new View;

$string = $gbook -> getData();

$view->assign('string' , $string);

$view->display( __DIR__ . '/../templates/guestbook/index.php');


