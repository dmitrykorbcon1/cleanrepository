<html>
    <body>
        <?php
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
                        echo 'Файл ' . $i . '_' . $_FILES['myimg']['name'] . ' успешно загружен в галлерею!!!';//загрузка с новым именем
                    }else {
                            $res = move_uploaded_file(
                                $_FILES['myimg']['tmp_name'],
                                __DIR__ . '/Photo/' . $_FILES['myimg']['name']);//загрузка с тем-же именем, что и у пользователя
                        echo 'Файл ' . $_FILES['myimg']['name'] . ' успешно загружен в галлерею!!!';
                    }
                  } else {
                     echo 'Error!!! Upload file is no jpeg/png image!!!';//ошибка, файл не jpg и не png
                     }
            }
        }
        ?>
        <br><br>
        <a href="/cleanrepository/DZ4/DZ4_2/gallery.php">В галлерею</a><br><br>
    </body>
</html>
