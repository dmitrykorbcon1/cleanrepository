<?php

namespace App\Controllers;

use App\Models\Article;

class Save extends \App\Controller
{
    protected function action()
    {
        if (isset( $_POST['head1'], $_POST['text1'], $_POST['author1'], $_POST['add'] ) ) {
            if ('' !== $_POST['head1']) {
                if ('' !== $_POST['text1']) {
                    if ('' !== $_POST['author1']) {
                        $article = new Article();
                        $article->head = $_POST['head1'];
                        $article->text = $_POST['text1'];
                        $article->author = $_POST['author1'];
                        $article->save();
                    }
                }
            }
        }

        if (isset( $_POST['head'], $_POST['text'], $_POST['author'], $_POST['upd'] ) ) {
            if ('' !== $_POST['head']) {
                if ('' !== $_POST['text']) {
                    if ('' !== $_POST['author']) {
                        $article = \App\Models\Article::findById( $_POST['upd'] );
                        $article->head = $_POST['head'];
                        $article->text = $_POST['text'];
                        $article->author = $_POST['author'];
                        $article->save();
                    }
                }
            }
        }

        if (isset( $_POST['del'] ) ) {
            $article = \App\Models\Article::findById( $_POST['del'] );
            $article->delete();
        }

        $this->view->display( __DIR__ . '/../Templates/save.php');
    }
}
