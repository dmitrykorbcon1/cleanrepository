<?php

namespace App\Models;

use App\Model;

use App\Db;

class Article extends Model
{

    protected static $table = 'news';

    protected $id;

    protected  $head;

    protected  $text;

    protected  $author;

    public static function lastNews( int $n ) //вывод последних n новостей
    {
        $db = new Db();

        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $n ;


        $data = $db->query( $sql, static::class, [] );

        return $data;
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

    public function getId()
    {
        return $this->id;
    }
}



