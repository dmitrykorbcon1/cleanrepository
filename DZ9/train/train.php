<?php

require __DIR__ . '/../autoload.php';

$tr = new \App\Models\TimeTable( __DIR__ . '/../configs/config.php' );

$view = new \App\Models\View;

$view->assign( 'trains', $tr->getTrains() );

$view->display( __DIR__ . '/../templates/train/train.php' );

