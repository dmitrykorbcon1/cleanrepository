<html>
<head>
    <title>Домашка 4</title>
    <meta charset= />
</head>
<body>
<?php
include __DIR__ . '/Function_read.php';
    foreach (read ( __DIR__. '/guestbook.txt') as $line) {
        echo $line;
?>
 <br>
<?php
        }
        ?>
<form
   action="Obrabotchic.php"
   method="post">
    <input type="text" name="new_comment">
    <input type="submit" type="URL" value="Добавить запись!">
</form>
</body>
</html>
