<?php

namespace App\Controllers;

use App\Models\Article;

class Update extends \App\Controller
{
    protected function action()
    {
        $article = \App\Models\Article::findById($_POST['upd']);

        $article->head = $_POST['head'];

        $article->text = $_POST['text'];

        $article->author = $_POST['author'];

        $article->save();

        header('Location: /2DZ4/Admin');
    }
}
