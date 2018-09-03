<?php

namespace App\Controllers;

use App\NotFound;

use SebastianBergmann\Timer\Timer;

class Article extends \App\Controller

{
    protected function action()
    {
        if (isset($_GET['id'])) { //если id получен
            $article = \App\Models\Article::findById($_GET['id']);
        }

        if (false === $article) {  //в случае ошибки-выбрасываем исключение

        throw new NotFound('Ошибка 404. Запись-не найдена');

        }

        $this->view->article = $article;

        $this->view->resource = Timer::resourceUsage();

        $this->view->display( __DIR__ . '/../Templates/article.php');
    }
}
