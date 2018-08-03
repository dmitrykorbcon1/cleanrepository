<?php

require __DIR__ . '/autoload.php';

use App\Models\Article;

if (isset( $_POST['head'], $_POST['text'], $_POST['author'], $_POST['add'] ) ) {
    if ('' !== $_POST['head']) {
        if ('' !== $_POST['text']) {
            if ('' !== $_POST['author']) {
                $data = new Article();
                $data->addHead( $_POST['head'] );
                $data->addText( $_POST['text'] );
                $data->addAuthor( $_POST['author'] );
                $data->save();
            }
        }
    }
}

if (isset( $_POST['head'], $_POST['text'], $_POST['author'], $_POST['id'], $_POST['upd'] ) ) {
    if ('' !== $_POST['head']) {
        if ('' !== $_POST['text']) {
            if ('' !== $_POST['author']) {
                $data = \App\Models\Article::findById( $_POST['id'] );
                $data->addHead( $_POST['head'] );
                $data->addText( $_POST['text'] );
                $data->addAuthor( $_POST['author'] );
                $data->save();
            }
        }
    }
}

if (isset( $_POST['id'], $_POST['del'] ) ) {
    $data = \App\Models\Article::findById( $_POST['id'] );
    $data->delete();
}

$data = \App\Models\Article::findAll();

include __DIR__ . '/templates/admin.php';