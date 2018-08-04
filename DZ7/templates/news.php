<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница новостей</title>
</head>
    <body>

        <h1> Страница новостей </h1>

        <?php

        foreach ( $articles as $id => $article ) {

        ?>

            <h2>
                <a href="/DZ7/article.php?id=<?php echo $id; ?>">
                    <?php echo $article->getHead(); ?>
                </a>
            </h2>

            <article>
                <?php echo $article->getAnnot(); ?>
            </article>

            <hr>

        <?php

        }

        ?>

    </body>
</html>
