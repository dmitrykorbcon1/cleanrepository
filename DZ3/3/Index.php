<html>
<head>
    <title>Домашка 3</title>
</head>
<body>
<?php
include __DIR__ . '/Massive.php';
//включаем из файла Massive.php массив $arr и с помощью его выводим стандартными средствами HTML несколько изображений
?>
<a href="/cleanrepository/DZ3/3/image.php?id=1"><img src="<?php echo $arr[1] ?>" width="400" ></a>
<a href="/cleanrepository/DZ3/3/image.php?id=2"><img src="<?php echo $arr[2] ?>" width="370" ></a>
<a href="/cleanrepository/DZ3/3/image.php?id=3"><img src="<?php echo $arr[3] ?>" width="348" ></a>
<a href="/cleanrepository/DZ3/3/image.php?id=4"><img src="<?php echo $arr[4] ?>" width="400" ></a>
</body>
</html>
