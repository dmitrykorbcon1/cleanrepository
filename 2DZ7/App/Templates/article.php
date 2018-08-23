<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статья</title>
</head>
<body>

    <h3>
        <?php echo $article->head; ?>
    </h3>
    <h4>
        <?php echo $article->text; ?>
    </h4>
    Автор статьи: <?php echo $article->author; ?>
    <br>
    <br>
    <a href="/2DZ7/index"><button>На главную</button></a>
    <br>
    <div style="position: absolute; bottom: 0px;"><?php echo $resource; ?> </div>
</body>
</html>