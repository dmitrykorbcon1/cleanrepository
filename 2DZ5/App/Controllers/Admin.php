<?php

namespace App\Controllers;

use App\Models\Article;

/**
 * Class Admin
 * @package App\Controllers
 */
class Admin extends \App\Controller
{
    protected function action()
    {
        $this->view->data = \App\Models\Article::findAll();

        $this->view->display(__DIR__ . '/../Templates/admin.php');
    }
}
