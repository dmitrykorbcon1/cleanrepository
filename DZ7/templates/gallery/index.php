<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галлерея</title>
</head>
<body>

    <?php

    foreach ($images as $img) {

    ?>

        <img src="/DZ7/gallery/Photo/<?php echo $img; ?>" height="250">

    <?php

    }

    ?>
    <br>
    <br>

    <form action="/DZ7/gallery/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myimg">
        <button type="submit">Загрузить...</button>
    </form>

</body>
</html>