<?php

require __DIR__ . '/autoload.php';

if (isset($_POST['head'], $_POST['text'], $_POST['author'], $_POST['add'])) {
    if ('' !== $_POST['head']) {
        if ('' !== $_POST['text']) {
            if ('' !== $_POST['author']) {
                $article = new \App\Models\Article();
                $article->head = $_POST['head'];
                $article->text = $_POST['text'];
                $article->author = $_POST['author'];
                $article->save();
            }
        }
    }
}

header('Location: /2DZ2/admin.php');
