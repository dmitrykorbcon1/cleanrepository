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
        if ( isset($_FILES[$this->image]) ) {

            if ( 0 === $_FILES[$this->image]['error'] ) {

                return  is_uploaded_file($_FILES[$this->image]['tmp_name'] );
            }
        }
    }

    public function upload($path, $logPath)
    {
        if ( $this->isUploaded() ) {

            if ( $_FILES[$this->image]['type'] == 'image/jpeg' || $_FILES[$this->image]['type'] == 'image/png') { //проверка является ли файл изображением jpg или png )

                if ( file_exists( $path . $_FILES[$this->image]['name'])) { //есть ли уже в папке файл с таким именем
                    $i = 1;
                    while (file_exists( $path . $i . '_' . $_FILES[$this->image]['name'])) {
                        $i = $i + 1;
                    }
                    move_uploaded_file(
                        $_FILES[$this->image]['tmp_name'],
                        $path . $i . '_' . $_FILES[$this->image]['name']);
                    echo 'Файл: ' . $i . '_' . $_FILES[$this->image]['name'] . ' успешно загружен в галерею!!!';//загрузка с новым именем
                    $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . '--Upload file:' . $i . '_' . $_FILES[$this->image]['name'] . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и имя загруженного файла
                    file_put_contents($logPath, $write, FILE_APPEND);
                } else {
                    move_uploaded_file(
                        $_FILES[$this->image]['tmp_name'],
                        $path . $_FILES[$this->image]['name']);//загрузка с тем-же именем, что и у пользователя
                    echo 'Файл: ' . $_FILES[$this->image]['name'] . ' успешно загружен в галерею!!!';
                    $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . '--Upload file:' . $_FILES[$this->image]['name'] . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и имя загруженного файла
                    file_put_contents( $logPath, $write, FILE_APPEND);
                }
            } else {
                echo 'Error!!! Upload file is no jpeg/png image!!!';//ошибка, файл не jpg и не png
                $write = date('Y-m-d H:i:s'  ) . '--Upload by: ' . getCurrentUser() . 'Attempt error!' . "\r\n";  //при добавлении файла записываем в файл логов дату, пользователя и ошибку
                file_put_contents( $logPath, $write, FILE_APPEND);
            }
        }
    }
}
