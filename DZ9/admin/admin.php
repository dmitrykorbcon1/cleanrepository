<?php

session_start();

require __DIR__ . '/../autoload.php';

$txt = new \App\Models\TextFile( __DIR__ . '/../text/headText.txt');

$auth = new \App\Models\Authorize();

if ( null === $auth->getUserName() ) {

    header('Location: /DZ9/admin/login.php');

    exit;
}

if ( isset( $_POST['headText'] ) ) {
    if ( is_string( $_POST['headText'] ) ) {

        $txt->setData( $_POST['headText'] )->save();
    }
}

$view = new \App\Models\View;

$view->assign( 'text', $txt->getData() );

$view->display( __DIR__ . '/../templates/admin/admin.php');