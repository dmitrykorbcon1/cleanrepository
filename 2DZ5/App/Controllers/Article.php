<?php

namespace App\Controllers;

use App\NotFound;

class Article extends \App\Controller

{
    protected function action()
    {
        if ( isset( $_GET['id'] ) ) { //если id получен
            if (is_numeric( $_GET['id'] )) {  //если в id числовое значение

                $article = \App\Models\Article::findById($_GET['id']);
            }
        }

        if ( false === $article ) {  //в случае ошибки-выбрасываем исключение

        throw new NotFound('Ошибка 404. Запись-не найдена');

        }

        $this->view->article = $article;

        $this->view->display( __DIR__ . '/../Templates/article.php');
    }
}