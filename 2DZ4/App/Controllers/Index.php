<?php

namespace App\Controllers;

class Index extends \App\Controller
{
    protected function action()
    {
        $this->view->articles = \App\Models\Article::findAll();;

        $this->view->display( __DIR__ . '/../Templates/index.php');
    }
}