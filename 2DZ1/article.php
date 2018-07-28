<?php

require __DIR__ .'/autoload.php';

if ( isset( $_GET['id'] ) ) {   //если id задан

    $data = \App\Models\Article::findById( $_GET['id'] );

    if ( !isset( $data ) ) {

        die('Статья отсутствует');

    }

    if ( null !== $data ) {

        require __DIR__ . '/templates/article.php';
    }
}



