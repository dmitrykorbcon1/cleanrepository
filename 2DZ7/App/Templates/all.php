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
    <?php foreach ($models as $model) { ?>
        <tr>
            <?php foreach ($functions as $function) { ?>
            <td width="100"><?php echo $function($model); ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<br>
<a href="/2DZ7/Edit"><button>Редактирование</button></a>
<a href="/2DZ7/Index"><button>На главную</button></a>
<br>
<div style="position: absolute; bottom: 0px;"><?php echo $resource; ?> </div>
</body>
</html>

