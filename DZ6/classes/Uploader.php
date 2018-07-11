<?php
class Uploader
{
    protected $image;

    public function __construct($myimg) //передаём имя поля формы загрузки изображения
        {
            $this->image = $myimg;
        }

    public function isUploaded()
        {
        if (isset($_FILES[$this->image]) ) {

            if (0 === $_FILES[$this->image]['error']) {

                if (is_uploaded_file($_FILES[$this->image]['tmp_name'])) {

                    return true;
                    }
                }
            }
        }

    public function upload()
        {
            if ($this->isUploaded()){

                if ($_FILES[$this->image]['type'] == 'image/jpeg' || $_FILES[$this->image]['type'] == 'image/png') { //проверка является ли файл изображением jpg или png )

                    if (file_exists(__DIR__ . '/../gallery/Photo/' . $_FILES[$this->image]['name'])) { //есть ли уже в папке Photo файл с таким именем
                            $i = 1;
                        while (file_exists(__DIR__ . '/../gallery/Photo/' . $i . '_' . $_FILES[$this->image]['name'])) {
                            $i = $i + 1;
                        }
                        $res = move_uploaded_file(
                            $_FILES[$this->image]['tmp_name'],
                            __DIR__ . '/../gallery/Photo/' . $i . '_' . $_FILES[$this->image]['name']);
                        echo 'Файл: ' . $i . '_' . $_FILES[$this->image]['name'] . ' успешно загружен в галерею!!!';//загрузка с новым именем
                        $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . '--Upload file:' . $i . '_' . $_FILES[$this->image]['name'] . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и имя загруженного файла
                        file_put_contents(__DIR__. '/../gallery/log.txt', $write, FILE_APPEND);
                    } else {
                        $res = move_uploaded_file(
                            $_FILES[$this->image]['tmp_name'],
                            __DIR__ . '/../gallery/Photo/' . $_FILES[$this->image]['name']);//загрузка с тем-же именем, что и у пользователя
                        echo 'Файл: ' . $_FILES[$this->image]['name'] . ' успешно загружен в галерею!!!';
                        $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . '--Upload file:' . $_FILES[$this->image]['name'] . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и имя загруженного файла
                        file_put_contents(__DIR__. '/../gallery/log.txt', $write, FILE_APPEND);
                    }
                } else {
                 echo 'Error!!! Upload file is no jpeg/png image!!!';//ошибка, файл не jpg и не png
                 $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . 'Attempt error!' . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и ошибку
                 file_put_contents(__DIR__. '/../gallery/log.txt', $write, FILE_APPEND);
                 }
            }
        }
}
