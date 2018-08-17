<?php

namespace App;

class Config
{
    public $data;

    protected static $instance;

    protected function __construct() //защищённый конструктор
    {
        $this->data = require __DIR__ . '/../config.php';
    }

    public static function instance()
    {
        if ( null === self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}

