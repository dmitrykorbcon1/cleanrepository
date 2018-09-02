<?php

namespace App\Controllers;

use App\Models\Article;

class Insert extends \App\Controller
{
    protected function action()
    {
        if (isset( $_POST['head1'], $_POST['text1'], $_POST['author1'], $_POST['add'] ) ) {
            $data = ['head' => $_POST['head1'],'text' => $_POST['text1'], 'author' => $_POST['author1'] ]; //пишем в массив
            $article = new Article();
            $article->fill($data); // валидируем
            $article->save();  //если не выброшено исключение - добавляем запись
        }

        header('Location: /2DZ5/Admin');
    }
}
