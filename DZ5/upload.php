<?php
session_start();
include __DIR__ . '/My_functions.php';
if ( null === getCurrentUser() ) {
    header('Location: /DZ5_1/login.php');
    exit;
}
if ( isset($_FILES['myimg']) ) {
    if (0 == $_FILES['myimg']['error']) {
        if ($_FILES['myimg']['type'] == 'image/jpeg') { //проверка расширения файла (в данном случае - *.jpg)
            $res = move_uploaded_file( $_FILES['myimg']['tmp_name'], __DIR__ . '/Photo/Image.jpg');    //присваиваем произвольное (временное) имя загруженному на сервер файлу, например: Image.jpg

            $oldname = $_FILES['myimg']['name'];    //достаём имя файла из массива FILES и кладём в переменную $oldname (строка)

            rename(__DIR__ . '/Photo/Image.jpg', __DIR__ . '/Photo/' . $oldname);    //возвращаем файлу его старое имя(как на компьютере пользователя), используя функцию переименования файлов

            $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . '--Upload file:' . $oldname . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и имя загруженного файла

            file_put_contents(__DIR__. '/log.txt', $write, FILE_APPEND);

            echo 'Файл ' . $oldname . ' успешно загружен в галлерею!!!';     //выводим сообщение об успешном добавлении файла-картинки со старым именем в соответствующую папку на сервере
        } else {
            echo 'Error!!! Upload file is no image';//ошибка, файл не jpg
        }
    }
}

