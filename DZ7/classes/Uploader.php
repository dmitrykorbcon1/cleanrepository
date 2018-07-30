<?php
class Uploader
{
    protected $image;

    protected $name;

    public function __construct($myimg) //передаём имя поля формы загрузки изображения
    {
        $this->image = $myimg;
    }

    public function isUploaded()
    {
        if ( isset($_FILES[$this->image]) ) {

            if ( 0 === $_FILES[$this->image]['error'] ) {

                return  is_uploaded_file( $_FILES[$this->image]['tmp_name'] )
            }
        }
    }

    public function upload()
    {
        if ( $this->isUploaded() ) {

            if ( $_FILES[$this->image]['type'] == 'image/jpeg' || $_FILES[$this->image]['type'] == 'image/png') { //проверка является ли файл изображением jpg или png )

                $this->name = $_FILES[$this->image]['name'];

                if ( file_exists( __DIR__ . '/../gallery/Photo/' . $this->name)) { //есть ли уже в папке Photo файл с таким именем

                    $i = 1;
                    while ( file_exists( __DIR__ . '/../gallery/Photo/' . $i . '_' . $this->name)) {
                        $i = $i + 1;
                    }

                    $this->name = $i . '_' . $this->name;

                }

                move_uploaded_file( $_FILES[$this->image]['tmp_name'],
                    __DIR__ . '/../gallery/Photo/' . $this->name);

                return true;

            }

        }

        return false;

    }

    public function getName()
    {
        return $this->name;
    }
}
