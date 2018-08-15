<?php

namespace App;

/**
 * Class View
 * @package App
 */
class View implements \Countable, \Iterator
{
    protected $data = [];

    use IsTrait;

    /**
     * @param $template
     */
    public function display($template)
    {
        extract($this->data);

        include $template;
    }

    /**
     * @param $template
     * @return string
     */
    public function render($template)
    {
        ob_start();
        $this->display($template);
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    /**
     * @return int|mixed|null|string
     */
    public function key()
    {
        return key($this->data);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return null !== key($this->data);
    }

    public function rewind()
    {
        reset($this->data);
    }
}

