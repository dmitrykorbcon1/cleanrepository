<html>
<head>
    <title>Домашка 4</title>
</head>
<body>
<?php
include __DIR__ . '/functionRead.php';
    foreach (read () as $line) {
        echo $line;
?>
 <br>
<?php
 }
?>
<form
   action="/cleanrepository/DZ4/DZ4_1/uploader.php"
   method="post">
    <input type="textarea" cols="30" rows="30" name="newComment">
    <input type="submit" value="Добавить запись!">
</form>
</body>
</html>
