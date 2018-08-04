<?php

namespace App\Models;

class Gallery
{

    protected $path;

    public function __construct($path) //путь к директории с изображениями __DIR__. '/Photo'
    {
        $this->path = $path;
    }


    public function getPath()
    {
        return $this->path;
    }


    public function getImageList()
    {
        $list = scandir( $this->path );

        $list = array_diff( $list, ['.', '..'] );

        return $list;

    }
}




