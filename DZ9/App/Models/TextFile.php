<?php

namespace App\Models;

class TextFile
{
    protected $data;

    protected $path;  //для передачи пути к файлу из конструктора, создадим дополнительное свойство $put

    public function __construct($path)
        {
            $this->data = file_get_contents($path);
            $this->path = $path;
        }

    public function getData()
        {
            return $this->data;
        }

    public function save()
    {
        file_put_contents($this->path, $this->data);
    }


    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}

