<?php

require __DIR__ . '/autoload.php';

if (isset($_POST['del'])) {

    $article = \App\Models\Article::findById($_POST['del']);

    $article->delete();
}

header('Location: /2DZ3/admin.php');
