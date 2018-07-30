<?php

require __DIR__ . '/../classes/View.php';

session_start();

include __DIR__ . '/myFunctions.php';

if ( null !== getCurrentUser() ) {

    header('Location: /DZ7/gallery/index.php');
    exit;

} else {

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

    if ( true === existsUser($login) ) {

        if ( true === checkPassword($login, $password) ) {

            header('Location: /DZ7/gallery/index.php');
            $_SESSION['login'] = $login;
            exit;

        }
    }
}

$view = new View;

$view->display( __DIR__. '/../templates/gallery/login.php');