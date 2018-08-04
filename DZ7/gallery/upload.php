<?php

session_start();

require __DIR__ . '/../classes/View.php';

include __DIR__ . '/myFunctions.php';

require __DIR__ . '/../classes/Uploader.php';

if ( null === getCurrentUser() ) {

    header('Location: /DZ7/gallery/login.php');
    exit;
}

$uploader = new Uploader ('myimg');

$path = __DIR__ . '/../gallery/Photo/';

if ( true == $uploader->upload($path)  ) {

    echo 'Файл загружен!';

} else {

echo 'Ошибка загрузки файла.';

}

$view = new View;

$view->display( __DIR__ . '/../templates/gallery/upload.php');

