<?php

require __DIR__ . '/autoload.php';

$article = \App\Models\Article::findById($_POST['upd']);

$article->head = $_POST['head'];

$article->text = $_POST['text'];

$article->save();

header('Location: /2DZ3/admin.php');