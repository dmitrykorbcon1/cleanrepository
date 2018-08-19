<?php

namespace App\Models;

use App\Model;

use App\MultiException;

/**
 * Class Article
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

    /**
     * @param array $data
     * @throws MultiException
     */
    public function fill(array $data)
    {
        $errors = new MultiException();

            if ('' == $data['head']) {
                $errors->add(new \Exception('Заголовок статьи не задан!'));
            }

            if ('' == $data['text']) {
                $errors->add(new \Exception('Текст статьи отсутствует!'));
            }

            if (mb_strlen($data['text']) < 7)  {
                $errors->add(new \Exception('Слишком короткий текст статьи!'));
            }

            if ('' == $data['author']) {
                $errors->add(new \Exception('Автор статьи не задан!'));
            }

        if (!$errors->empty()) {
            throw $errors;
        }

        $this->head = $data['head'];

        $this->text = $data['text'];

        $this->author = $data['author'];
    }

}



