<?php

session_start();

require __DIR__ . '/../autoload.php';

$auth = new \App\Models\Authorize();

if ( null !== $auth->getUserName() ) {

    header( 'Location: /DZ9/admin/admin.php' );

    exit;
}

if ( null == $auth->getUserName() ) {

    if ( isset($_POST['login']) ) {

        $login = $_POST['login'];

    } else {

        $login = '';
    }

    if ( isset($_POST['password']) ) {

        $password = $_POST['password'];

    } else {

        $password = '';
    }

    if ( $auth->verification( $login, $password ) ) {

    header( 'Location: /DZ9/admin/admin.php' );

    exit;

    }
}

$view = new \App\Models\View;

$view->assign( 'login', $login );

$view->assign( 'password', $password );

$view->display( __DIR__ . '/../templates/admin/login.php' );