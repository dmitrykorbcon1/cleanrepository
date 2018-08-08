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
<style>
    table { border: 2px solid black; }
    td, th { border: 1px solid black; text-align: center }
</style>
<table>
    <tr>
        <th>id</th>
        <th>Заголовок</th>
        <th>Текст</th>
        <th>Автор</th>
    </tr>
    <?php foreach ($articles as $name) { ?>
        <tr>
            <td width="50"><?php echo $name->getId(); ?></td>
            <td width="100"><?php echo $name->head; ?></td>
            <td width="250"><?php echo $name->text; ?></td>
            <td width="100"><?php echo $name->author->username ?? ''; ?></td>
        </tr>
    <?php } ?>
</table>

<form action="/2DZ3/admin.php" method="post">

    <br>
    Заголовок статьи: <input type="text" name="head">
    <br>
    <br>
    Текст статьи: <input type="text" name="text">
    <br>
    <br>
    <input type="submit" name="add" value="Добавить">
    <br>
    <br>
    id: <input type="text" name="id" >
    <br>
    <br>
    <input type="submit" name="del" value="Удалить">
    <input type="submit" name="upd" value="Обновить">

</form>
<br>
<a href="/2DZ3/index.php"><button>На главную</button></a>

</body>
</html>

