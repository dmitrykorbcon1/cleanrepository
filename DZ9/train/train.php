<?php

require __DIR__ . '/../autoload.php';

$timeTable = new \App\Models\TimeTable();

$view = new \App\Models\View;

$trains = $timeTable->getTrains();

$view->assign( 'trains', $trains );

$view->display( __DIR__ . '/../templates/train/train.php' );

