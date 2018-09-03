<?php

namespace App\Controllers;

use SebastianBergmann\Timer\Timer;

/**
 * Class Admin
 * @package App\Controllers
 */
class Edit extends \App\Controller
{
    protected function action()
    {
        $this->view->data = \App\Models\Article::findAll();

        $this->view->resource = Timer::resourceUsage();

        $this->view->display(__DIR__ . '/../Templates/admin.php');
    }
}
