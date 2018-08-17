<?php

require __DIR__ . '/autoload.php';

use App\Models\Article;


if (isset( $_POST['head'], $_POST['text'], $_POST['add'] ) ) {
    if ('' !== $_POST['head']) {
        if ('' !== $_POST['text']) {

                $article = new Article();
                $article->head = $_POST['head'];
                $article->text = $_POST['text'];
                $article->save();
        }
    }
}

if (isset( $_POST['head'], $_POST['text'], $_POST['id'], $_POST['upd'] ) ) {
    if ('' !== $_POST['head']) {
        if ('' !== $_POST['text']) {
                $article = \App\Models\Article::findById( $_POST['id'] );
                $article->head = $_POST['head'];
                $article->text = $_POST['text'];
                $article->save();
        }
    }
}

if (isset( $_POST['id'], $_POST['del'] ) ) {
    $article = \App\Models\Article::findById( $_POST['id'] );
    $article->delete();
}

$view = new \App\View();

$view->articles = \App\Models\Article::findAll();

$view->display( __DIR__ . '/templates/admin.php');

