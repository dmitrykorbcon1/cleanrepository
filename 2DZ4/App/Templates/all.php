<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All</title>
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
            <td width="50"><?php echo $name->id; ?></td>
            <td width="100"><?php echo $name->head; ?></td>
            <td width="250"><?php echo $name->text; ?></td>
            <td width="100"><?php echo $name->author; ?></td>
        </tr>
    <?php } ?>
</table>
<br>
<a href="/2DZ4/edit"><button>Редактировать</button></a>
</body>
</html>

