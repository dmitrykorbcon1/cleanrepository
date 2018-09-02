<?php

namespace App\Controllers;

use App\Models\Article;

class Update extends \App\Controller
{
    protected function action()
    {
        if (isset( $_POST['head'], $_POST['text'], $_POST['author'], $_POST['upd'] ) ) {
            $data = ['head' => $_POST['head'],'text' => $_POST['text'], 'author' => $_POST['author'] ];
            $article = \App\Models\Article::findById( $_POST['upd'] );
            $article->fill($data);
            $article->save();
        }

        header('Location: /2DZ6/Admin');
    }
}
