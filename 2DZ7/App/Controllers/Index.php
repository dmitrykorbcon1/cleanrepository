<?php

namespace App\Controllers;

use App\Models;

use SebastianBergmann\Timer\Timer;

class Index extends \App\Controller
{
    protected function action()
    {
        $this->view->articles = \App\Models\Article::findAll();

        $this->view->resource = Timer::resourceUsage();

        $this->view->display( __DIR__ . '/../Templates/index.php');
    }
}