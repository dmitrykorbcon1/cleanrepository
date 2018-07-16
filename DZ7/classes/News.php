<?php

require __DIR__ . '/Article.php';

class News
{
    protected $articles;

    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
        $this->articles = [];

        if ( is_readable($path) ) {

            $d = file_get_contents($path);

            if ( false !== $d ) {

                $h = unserialize($d);

                if ( is_array($h) ) {

                    $this->articles = $h;

                }
            }
        }
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function saveNews()
    {
        $d = serialize( $this->getArticles() );
        file_put_contents( $this->path, $d );
    }

    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
    }

}



