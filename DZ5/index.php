<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
</head>
<body>
<?php

$list = scandir(__DIR__. '/Photo');

$list = array_diff($list, ['.', '..']);

foreach ($list as $img) {

?>
<img src="/DZ5/Photo/<?php echo $img; ?>" height="220">
<?php

}

?>
<br>
<br>
<form action="/DZ5/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <button type="submit">Загрузить...</button>
</form>
</body>
</html>