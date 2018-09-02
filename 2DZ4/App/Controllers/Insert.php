<?php

namespace App\Controllers;

use App\Models\Article;

class Insert extends \App\Controller
{
    protected function action()
    {
        if (isset($_POST['head1'], $_POST['text1'], $_POST['author1'], $_POST['add'])) {
            if ('' !== $_POST['head1']) {
                if ('' !== $_POST['text1']) {
                    if ('' !== $_POST['author1']) {
                        $article = new \App\Models\Article();
                        $article->head = $_POST['head1'];
                        $article->text = $_POST['text1'];
                        $article->author = $_POST['author1'];
                        $article->save();
                    }
                }
            }
        }

        header('Location: /2DZ4/Admin');
    }
}
