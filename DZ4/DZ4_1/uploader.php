<?php
include __DIR__ . '/functionRead.php';

$heed = read();//получаем записи из текстового файла в массив

$heed[] = $_POST['newComment']; //добавляем в массив дополнительным элементом новую запись

file_put_contents(__DIR__. '/guestbook.txt', implode("\r\n", $heed));// записываем новый массив в текстовый файл

header('Location: /cleanrepository/DZ4/DZ4_1/guestbook.php');//перенаправляем обработчик на главную страницу
