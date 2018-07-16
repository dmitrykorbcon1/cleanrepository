<?php

require __DIR__ . '/../classes/View.php';

require __DIR__ . '/../classes/GuestBook.php';

$gbook = new GuestBook(__DIR__ . '/guestbook.txt');

$view = new View;

$view->assign('ter' , ($gbook -> getData()));

$view->display( __DIR__ . '/../templates/guestbook/index.php');


