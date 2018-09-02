<?php

namespace App\Controllers;

use SebastianBergmann\Timer\Timer;

/**
 * Class Admin
 * @package App\Controllers
 */
class Error extends \App\Controller
{
    public $message;

    public function setMessage($error)
    {
        $this->message = $error;
    }

    protected function action()
    {
        $this->view->errors = $this->message;

        $this->view->resource = Timer::resourceUsage();

        $this->view->display( __DIR__ . '/../Templates/errors.php');
    }
}
