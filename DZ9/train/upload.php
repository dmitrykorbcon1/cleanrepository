<?php

require __DIR__ . '/../autoload.php';

$tr = new \App\Models\TimeTable( __DIR__ . '/../configs/config.php');

if ( isset( $_POST['trNum'] ) ) {
    if ( isset( $_POST['trName'] ) ) {
        if ( isset( $_POST['arriv'] ) ) {
            if ( isset( $_POST['depa'] ) ) {

                $tr->addTrain( $_POST['trNum'], $_POST['trName'], $_POST['arriv'], $_POST['depa'] );

            }
        }
    }
}

$view = new \App\Models\View;

$view->assign( 'trains', $tr->getTrains() );

$view->display( __DIR__ . '/../templates/train/train.php' );

