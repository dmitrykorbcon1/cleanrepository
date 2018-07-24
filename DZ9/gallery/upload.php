<?php

require __DIR__ . '/../autoload.php';

$uploader = new \App\Models\Uploader( 'myimg' );

if ( true == $uploader->upload( __DIR__ . '/Photo/' )  ) {

    header( 'Location: /DZ9/gallery/gallery.php' );

    exit;
} else {

    die( 'Ошибка загрузки! Неподдерживаемый тип файла!' );

}

