<?php
session_start();

include __DIR__ . '/My_functions.php';

if ( null === getCurrentUser() ) {
    header('Location: /DZ5_1/login.php');
    exit;
}

?>

<html>
    <head>
        <title>Домашка 5</title>
    </head>
    <body>
        <form
            action="/DZ5_1/upload.php"
            method="post"
            enctype="multipart/form-data">

            <input type="file" name="myimg">
            <button type="submit">Загрузить...</button>

        </form>
    </body>
</html>
