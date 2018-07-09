<?php
session_start();
include __DIR__ . '/myFunctions.php';
if (null !== getCurrentUser()){
    header('Location: /cleanrepository/DZ5/index.php');
    exit;
} else {
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
    } else {
        $login = '';
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password = '';
    }

    if (true === existsUser($login)) {
        if (true === checkPassword($login, $password)) {
            header('Location: /cleanrepository/DZ5/index.php');
            $_SESSION['login'] = $login;
            exit;
        }
    } else {
        echo 'Введите логин и пароль!';
    }
}
?>
<html>
    <head>
    <title>Авторизация</title>
    </head>
    <body>
         <form action="/cleanrepository/DZ5/login.php" method="post">
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