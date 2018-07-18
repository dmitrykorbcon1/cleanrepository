<?php

class Article
{
    protected $head;

    protected $text;

    protected $author;

    public function __construct($head, $text, $author)

    {
        $this->head = $head;
        $this->text = $text;
        $this->author = $author;
    }

    public function getHead()
    {
        return $this->head;
    }

    public function getText()
    {
        return $this->text;
    }


    public function getAuthor()
    {
        return $this->author;
    }

}

