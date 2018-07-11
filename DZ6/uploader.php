<?php

require __DIR__ . '/classes/GuestBook.php';

$gbook = new GuestBook(__DIR__ . '/guestbook.txt'); //создаём новый объект $gbook (новая адресная книга), передаём в неё файл с адресной книгой

$gbook -> append($_POST['newComment']) ; //добавляем в массив дополнительным элементом новую запис

$gbook -> save(); // записываем новый массив в текстовый файл

header('Location: /cleanrepository/DZ6/guestbook.php');//перенаправляем обработчик на главную страницу
