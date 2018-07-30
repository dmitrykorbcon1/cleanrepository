<?php

if ( null !== getCurrentUser() ) {
    header('Location: /DZ5/index.php');
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
            header('Location: /DZ5/index.php');
            $_SESSION['login'] = $login;
            exit;
        }
    }
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
Введите логин и пароль!
<form action="/DZ6/login.php" method="post">
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
            <td><input type="submit" value="Вход"/></td>
        </tr>
    </table>
</form>
</body>
</html>