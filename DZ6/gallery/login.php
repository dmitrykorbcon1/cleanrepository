<?php
session_start();

include __DIR__ . '/myFunctions.php';

if ( null !== getCurrentUser() ) {
    header('Location: /DZ6/gallery/index.php');
    exit;
}
if ( null == getCurrentUser() ) {

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
            header('Location: /DZ6/gallery/index.php');
            $_SESSION['login'] = $login;
            exit;
        }
    }
}
?>
<html>
    <head>
    <title>Авторизация</title>
    </head>
    <body>
    Введите логин и пароль
         <form action="/DZ6/gallery/login.php" method="post">
            <table align=left>
                <tr>
                    <td>Login</td>
                    <td><input type="text" name="login"/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Вход"/></td>
                </tr>
            </table>
         </form>
    </body>
</html>