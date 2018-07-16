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

include __DIR__ . '/massive.php';
//включаем из файла Massive.php массив $arr и с помощью его выводим стандартными средствами HTML несколько изображений
foreach ($arr as $id => $img) {

?>
    <a href="/DZ3/3/image.php?id=<?php echo $id; ?>"><img src="<?php echo $img; ?>" height="220" ></a>
<?php

}

?>

</body>
</html>
