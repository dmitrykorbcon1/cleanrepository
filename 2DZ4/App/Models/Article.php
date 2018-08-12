<?php

namespace App\Models;

use App\Model;

/**
 * Class Article
 * @property Author $author
 */
class Article extends Model
{
    /**
     * @var string
     */
    protected static $table = 'news';

    public  $head;
    public  $text;
    public  $author;

}



