<?php

namespace App\Controllers;

use App\Models\Article;

class Edit extends \App\Controller
{
    protected function action()
    {
        $this->view->articles = \App\Models\Article::findAll();

        $this->view->display(__DIR__ . '/../Templates/editor.php');
    }
}
