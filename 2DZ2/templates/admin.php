<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка</title>
</head>
<body>

<table border="1">
    <tr align="center">
        <th>id</th>
        <th>Заголовок</th>
        <th>Текст</th>
        <th>Автор</th>
    </tr>
    <?php foreach ($data as $name) { ?>
        <tr align="center">
            <td width="50"><?php echo $name->id; ?></td>
            <td width="100"><?php echo $name->head; ?></td>
            <td width="250"><?php echo $name->text; ?></td>
            <td width="100"><?php echo $name->author; ?></td>
        </tr>
    <?php } ?>
</table>

<form action="/2DZ2/admin.php" method="post">

<br>
Заголовок статьи: <input type="text" name="head">
<br>
Текст статьи: <input type="text" name="text">
<br>
Автор: <input type="text" name="author">
<br>
<input type="submit" name="add" value="Добавить">
<br>
id: <input type="text" name="id" >
<br>
<input type="submit" name="del" value="Удалить">
<input type="submit" name="upd" value="Обновить">

</form>
<br>
<a href="/2DZ2/index.php">На главную</a>

</body>
</html>

