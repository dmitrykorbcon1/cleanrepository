<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>

<?php

include __DIR__ . '/functionRead.php';

foreach (read() as $line) {
        echo $line;
?>
<br>
<?php

}

?>
<form
   action="/DZ4/DZ4_1/uploader.php"
   method="post">
    <input type="textarea" cols="30" rows="30" name="newComment">
    <input type="submit" value="Добавить запись!">
</form>
</body>
</html>
