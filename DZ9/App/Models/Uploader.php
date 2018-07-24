<?php

namespace App\Models;

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
    if (isset($_FILES[$this->image]) ) {

        if (0 === $_FILES[$this->image]['error']) {

            if (is_uploaded_file($_FILES[$this->image]['tmp_name'])) {

                return true;

                }
            }
        }

        return false;
    }

    public function upload($pathPhoto)
    {
        if ($this->isUploaded() ) {

            if ($_FILES[$this->image]['type'] == 'image/jpeg' || $_FILES[$this->image]['type'] == 'image/png') { //проверка является ли файл изображением jpg или png )

                $this->name = $_FILES[$this->image]['name'];

                if (file_exists($pathPhoto . $this->name)) { //есть ли уже в папке Photo файл с таким именем

                    $i = 1;
                    while (file_exists($pathPhoto . $i . '_' . $this->name)) {
                        $i = $i + 1;
                    }

                    $this->name = $i . '_' . $this->name;

                }

                move_uploaded_file( $_FILES[$this->image]['tmp_name'],
                    $pathPhoto . $this->name);

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
