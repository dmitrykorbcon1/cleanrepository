<?php

namespace App;

/**
 * Trait IsTrait
 * @package App
 */
trait IsTrait
{
    protected $data = [];

    /**
     * @param $name
     * @return bool
     */
    public function __get($name)
    {
        return $this->data[$name] ?? false;
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
}