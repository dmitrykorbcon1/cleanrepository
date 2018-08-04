<?php

require __DIR__ . '/../classes/GuestBook.php';

$gbook = new GuestBook( __DIR__ . '/guestbook.txt'); //создаём новый объект $gbook (новая адресная книга), передаём в неё путь до файла с адр. книгой

$gbook -> append($_POST['newComment']) ; //добавляем в массив дополнительным элементом новую запис

$gbook -> save(); // записываем новый массив в текстовый файл

header('Location: /DZ7/guestbook/index.php');//перенаправляем обработчик на главную страницу
