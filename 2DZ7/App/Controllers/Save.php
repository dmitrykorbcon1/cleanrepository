<?php

namespace App\Controllers;

use App\Models\Article;

use SebastianBergmann\Timer\Timer;

class Save extends \App\Controller
{
    protected function action()
    {
        if (isset($_POST['head1'], $_POST['text1'], $_POST['author1'], $_POST['add'])) {
            $data = ['head' => $_POST['head1'],'text' => $_POST['text1'], 'author' => $_POST['author1'] ]; //пишем в массив
            $article = new Article();
            $article->fill($data); // валидируем
            $article->save();  //если не выброшено исключение - добавляем запись
        }

        if (isset($_POST['head'], $_POST['text'], $_POST['author'], $_POST['upd'])) {
            $data = ['head' => $_POST['head'],'text' => $_POST['text'], 'author' => $_POST['author'] ];
            $article = \App\Models\Article::findById( $_POST['upd'] );
            $article->fill($data);
            $article->save();
        }

        if (isset($_POST['del'])) {
            $article = \App\Models\Article::findById( $_POST['del'] );
            $article->delete();
        }

        $this->view->resource = Timer::resourceUsage();

        $this->view->display(__DIR__ . '/../Templates/save.php');
    }
}
