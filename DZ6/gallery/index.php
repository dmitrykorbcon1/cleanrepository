<html>
<head>
    <title>Домашка 5</title>
</head>
<body>
<?php

$list = scandir(__DIR__. '/Photo');

$list = array_diff($list, ['.', '..']);

foreach ($list as $img) {

?>
<img src="/DZ6/gallery/Photo/<?php echo $img; ?>" height="250">
<?php } ?>
<html>
<body>
<br>
<br>
<form action="/DZ6/gallery/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <button type="submit">Загрузить...</button>
</form>
</body>
</html>