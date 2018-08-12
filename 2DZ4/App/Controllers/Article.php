<?php

namespace App\Controllers;

class Article extends \App\Controller
{
    protected function action()
    {
        if ( isset( $_GET['id'] ) ) { //если id получен
            if (is_numeric( $_GET['id'] )) {  //если в id числовое значение

                $article = \App\Models\Article::findById( $_GET['id'] );
            }
        }

        if ( false === $article ) {  //в случае ошибки-редирект на главную страницу

            header('Location: /index.php');
            exit;
        }

        $this->view->article = $article;

        $this->view->display( __DIR__ . '/../Templates/article.php');
    }
}