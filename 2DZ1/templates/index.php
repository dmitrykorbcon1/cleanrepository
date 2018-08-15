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

    <?php foreach ( $data as $article ) { ?>

        <h2>
            <a href="/2DZ1/article.php?id=<?php echo $article->id; ?>">
                <?php echo $article->head; ?>
            </a>
        </h2>

    <?php } ?>


</body>
</html>