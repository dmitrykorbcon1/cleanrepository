<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $article->getHead(); ?></title>
</head>
<body>

        <h3>
            <?php echo $article->getHead(); ?>
        </h3>

        <article>
            <?php echo $article->getText(); ?>
        </article>

</body>
</html>
