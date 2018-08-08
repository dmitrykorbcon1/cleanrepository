<?php
/**
 * @var \App\Models\Article $article
 */
?>

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
    Автор статьи: <?php echo $article->author->username ?? ''; ?>
    <br>
    <br>
    <a href="/2DZ3/index.php"><button>На главную</button></a>

</body>
</html>