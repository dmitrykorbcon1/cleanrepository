<?php

namespace App;
/**
 * Class Config
 * @package App
 */
class Config
{
    public $data;

    protected static $config;

    protected function __construct() //защищённый конструктор
    {
        $this->data = require __DIR__ . '/../config.php';
    }

    public static function instance()
    {
        if ( null === self::$config ) {
            self::$config = new self;
        }

        return self::$config;
    }
}

