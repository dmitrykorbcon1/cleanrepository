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

if ( true == $uploader->upload()  ) {

    echo 'Файл загружен!';
    $write = date( 'Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . '--Upload file:' . $uploader->getName() . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и имя загруженного файла
    file_put_contents( __DIR__ . '/log.txt', $write, FILE_APPEND);

} else {

echo 'Ошибка загрузки файла.';

}

$view = new View;

$view->display( __DIR__ . '/../templates/gallery/upload.php');

