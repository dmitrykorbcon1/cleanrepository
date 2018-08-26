<?php

require __DIR__ . '/autoload.php';

if (isset($_POST['head'], $_POST['text'], $_POST['add'])) {
    if ('' !== $_POST['head']) {
        if ('' !== $_POST['text']) {
            $article = new \App\Models\Article();
            $article->head = $_POST['head'];
            $article->text = $_POST['text'];
            $article->save();
        }
    }
}

header('Location: /2DZ3/admin.php');
