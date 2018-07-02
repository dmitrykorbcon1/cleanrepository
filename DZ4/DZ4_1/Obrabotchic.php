<?php
$new_comment = $_POST['new_comment'];//забираем новую запись из формы
$heed = file(__DIR__. '/guestbook.txt');//получаем записи из текстового файла в массив
$heed[] = "\r\n" . $new_comment; //добавляем в массив дополнительным элементом новую запись, с учётом символа переноса строки
file_put_contents(__DIR__. '/guestbook.txt', $heed);// записываем новый массив в текстовый файл
header('Location: guestbook.php');//перенаправляем обработчик на главную страницу
