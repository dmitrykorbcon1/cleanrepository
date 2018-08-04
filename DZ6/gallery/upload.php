<?php
session_start();

include __DIR__ . '/myFunctions.php';

require __DIR__ . '/../classes/Uploader.php';

if ( null === getCurrentUser() ) {
    header('Location: /DZ6/gallery/login.php');
    exit;
}
$path = __DIR__ . '/Photo/'; //путь к директории загрузки

$logPath = __DIR__. '/log.txt'; //путь к файлу логов

$gallery = new Uploader ('myimg');

$gallery->upload($path, $logPath);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузчик</title>
</head>
<body>
<br>
<br>
<a href="/DZ6/gallery/index.php">В галерею>>>></a><br><br>
</body>
</html>

