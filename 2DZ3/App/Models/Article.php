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
    protected static $table = 'news1';

    public  $head;
    public  $text;
    public  $author_id;

    /**
     * @param $name
     * @return bool|Author $author
     *
     */
    public function __get($name)
    {
        if ($name == 'author') {
            if (!empty( $this->author_id ) ) {

                $author = Author::findById($this->author_id);

                if (false !== $author) {

                    return $author;
                }
            }
        }
    }
}




