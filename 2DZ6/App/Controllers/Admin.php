<?php

namespace App\Controllers;

//use App\Models\Article;

use SebastianBergmann\Timer\Timer;

/**
 * Class Admin
 * @package App\Controllers
 */
class Admin extends \App\Controller
{
    protected function action()
    {
        $this->view->articles = \App\Models\Article::findAll();

        $this->view->resource = Timer::resourceUsage();

        $this->view->display(__DIR__ . '/../Templates/all.php');
    }
}
