<?php

namespace App\Models;

class View
{
    protected $a = [];

    public function assign($name, $value)
    {
        $this->a[$name] = $value;
    }

    public function display($template)
    {
        if ( file_exists($template)) {

            foreach ($this->a as $in => $v) {

                $$in = $v;
            }

            include $template;

        } else {
            die('Страница не найдена!');
        }
    }

    public function render($template)
    {
        ob_start();
        $this->display($template);
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
    }
}
