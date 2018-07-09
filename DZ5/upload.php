<?php
session_start();
include __DIR__ . '/myFunctions.php';
if ( null === getCurrentUser() ) {
    header('Location: /cleanrepository/DZ5/login.php');
    exit;
}
if ( isset($_FILES['myimg']) ) {
    if (0 == $_FILES['myimg']['error']) {
        if ($_FILES['myimg']['type'] == 'image/jpeg' || $_FILES['myimg']['type'] == 'image/png') { //проверка является ли файл изображением jpg или png )
            if (file_exists(__DIR__ . '/Photo/' . $_FILES['myimg']['name'])) { //есть ли уже в папке Photo файл с таким именем
                $i = 1;
                while (file_exists(__DIR__ . '/Photo/' . $i . '_' . $_FILES['myimg']['name'])) {
                    $i = $i + 1;
                }
                $res = move_uploaded_file(
                    $_FILES['myimg']['tmp_name'],
                    __DIR__ . '/Photo/' . $i . '_' . $_FILES['myimg']['name']);
                echo 'Файл: ' . $i . '_' . $_FILES['myimg']['name'] . ' успешно загружен в галерею!!!';//загрузка с новым именем
                $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . '--Upload file:' . $i . '_' . $_FILES['myimg']['name'] . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и имя загруженного файла
                file_put_contents(__DIR__. '/log.txt', $write, FILE_APPEND);
            }else {
                $res = move_uploaded_file(
                    $_FILES['myimg']['tmp_name'],
                    __DIR__ . '/Photo/' . $_FILES['myimg']['name']);//загрузка с тем-же именем, что и у пользователя
                echo 'Файл: ' . $_FILES['myimg']['name'] . ' успешно загружен в галерею!!!';
                $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . '--Upload file:' . $_FILES['myimg']['name'] . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и имя загруженного файла
                file_put_contents(__DIR__. '/log.txt', $write, FILE_APPEND);
            }
        } else {
            echo 'Error!!! Upload file is no jpeg/png image!!!';//ошибка, файл не jpg и не png
            $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . 'Attempt error!' . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и ошибку
            file_put_contents(__DIR__. '/log.txt', $write, FILE_APPEND);
        }
    }
}
?>
<br>
<br>
<a href="/cleanrepository/DZ5/index.php">В галерею>>>></a><br><br>

