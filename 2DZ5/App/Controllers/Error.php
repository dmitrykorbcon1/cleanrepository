<?php

namespace App\Controllers;

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

        $this->view->display( __DIR__ . '/../Templates/errors.php');
    }
}
