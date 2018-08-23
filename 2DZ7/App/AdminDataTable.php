<?php

namespace App;

use SebastianBergmann\Timer\Timer;

/**
 * Class AdminDataTable
 * @package App
 */

class AdminDataTable
{
    public $models = [];
    public $functions = [];

    /**
     * AdminDataTable constructor.
     * @param array $models
     * @param array $functions
     */
    public function __construct(array $models, array $functions)
    {
        $this->models = $models;

        $this->functions = $functions;
    }

    /**
     * @param $path
     */
    public function render($path)
    {
        $view = new View();

        $view->models = $this->models;

        $view->functions = $this->functions;

        $view->resource = Timer::resourceUsage();

        $view->display($path);
    }

}