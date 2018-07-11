<?php

require __DIR__ . '/classes/GuestBook.php';

$gbook = new GuestBook(__DIR__ . '/guestbook.txt');

?>
<html>
        <head>
            <title>Домашка 6</title>
        </head>
    <body>
        <?php
            include __DIR__ . '/functionRead.php';
            foreach ($gbook -> getData() as $line) {
                echo $line;
        ?>
         <br>
        <?php
         }
        ?>
        <form
           action="/cleanrepository/DZ6/uploader.php"
           method="post">
            <input type="textarea" cols="30" rows="30" name="newComment">
            <input type="submit" value="Добавить запись!">
        </form>
    </body>
</html>
