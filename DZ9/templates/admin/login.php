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
        <form action="/DZ9/admin/login.php" method="post">
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
                    <td><input value="Вернуться на главную" type="button" onclick="location.href='/DZ9/index.php'"></td>
                </tr>
            </table>
         </form>
</body>
</html>