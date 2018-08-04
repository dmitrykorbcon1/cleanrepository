<?php

require __DIR__ . '/../autoload.php';

$timeTable = new \App\Models\TimeTable();

if ( isset( $_POST['trNum'] ) ) {  //проверки оставляем, поскольку отображаем только полностью заполненную строку расписания
    if ( isset( $_POST['trName'] ) ) {
        if ( isset( $_POST['arriv'] ) ) {
            if ( isset( $_POST['depa'] ) ) {

                $timeTable->addTrain( $_POST['trNum'], $_POST['trName'], $_POST['arriv'], $_POST['depa'] );

            }
        }
    }
}

$view = new \App\Models\View;

$trains = $timeTable->getTrains();

$view->assign( 'trains', $trains );

$view->display( __DIR__ . '/../templates/train/train.php' );

