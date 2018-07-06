<?php
session_start();
include __DIR__ . '/My_functions.php';

if (null !== getCurrentUser()){
    header('Location: /DZ5_1/index.php');
    exit;
} else {
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
    } else {
        $login = '';
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }else {
        $password = '';
    }

    if (true === existsUser($login)) {
        if (true === checkPassword($login, $password)) {
            header('Location: /DZ5_1/index.php');
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
         <form action="login.php" method="post">
            <table align=center>
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