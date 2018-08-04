<?php

class Article
{
    protected $head;

    protected $annot;

    protected $text;

    public function __construct($head, $annot, $text)

    {
        $this->head = $head;
        $this->annot = $annot;
        $this->text = $text;
    }

    public function getHead()
    {
        return $this->head;
    }

    public function getAnnot()
    {
        return $this->annot;
    }


    public function getText()
    {
        return $this->text;
    }

}

