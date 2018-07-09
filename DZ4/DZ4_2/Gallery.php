<html>
    <head>
        <title>Домашка 4</title>
    </head>
    <body>
        <?php
            $list = scandir(__DIR__. '/Photo');
            $list = array_diff($list, ['.', '..']);
            foreach ($list as $img) {
            ?>
            <img src="/cleanrepository/DZ4/DZ4_2/Photo/<?php echo $img; ?>" height="250">
            <?php
            }
        ?>
        <br>
        <br>
        <form action="/cleanrepository/DZ4/DZ4_2/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="myimg">
            <button type="submit">Загрузить...</button>
        </form>
    </body>
</html>
