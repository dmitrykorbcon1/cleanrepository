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
    <?php foreach ($data as $name) { ?>
        <tr>
            <form action="/2DZ5/Update" method="post">
                <td width="100"> <?php echo $name->id; ?></td>  <!-- id нельзя изменить, задаём явно-->
                <td width="100"> <input type="text" name="head" value="<?php echo $name->head; ?>"></td>
                <td> <input type="text" name="text" value="<?php echo $name->text; ?>"></td>
                <td width="100"> <input type="text" name="author" value="<?php echo $name->author; ?>"></td>
                <td> <button type="submit" name="upd" value="<?php echo $name->id; ?>">Редактировать</button></td>
            </form>
            <td>
                <form action="/2DZ5/Delete" method="post">
                    <button type="submit" name="del" value="<?php echo $name->id; ?>">Удалить</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<br>
<form action="/2DZ5/Insert" method="post">
    Заголовок статьи: <input type="text" name="head1">
    <br>
    Текст статьи: <input type="text" name="text1">
    <br>
    Автор статьи: <input type="text" name="author1">
    <br>
    <input type="submit" name="add" value="Добавить">
</form>
<br>
<a href="/2DZ5/Index"><button>На главную</button></a>
</body>
</html>
