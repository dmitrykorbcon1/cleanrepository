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
            <a href="/2DZ2/article.php?id=<?php echo $article->getId(); ?>">
                <?php echo $article->getHead(); ?>
            </a>
        </h2>

    <?php } ?>

<a href="/2DZ2/admin.php"><button>В админку</button></a>

</body>
</html>

