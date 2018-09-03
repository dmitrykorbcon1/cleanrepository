<?php

namespace App\Controllers;

use App\Models\Article;

class Delete extends \App\Controller
{
    protected function action()
    {
        if (isset($_POST['del'])) {

            $article = \App\Models\Article::findById($_POST['del']);

            $article->delete();

            header('Location: /2DZ7/Admin');
        }
    }
}
