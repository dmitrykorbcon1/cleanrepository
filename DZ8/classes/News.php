<?php

require __DIR__ . '/DB.php';

require __DIR__ . '/Article.php';


class News
{
    protected $articles;

    protected $dataBase;

    public function __construct() //Новости будем получать из БД.
    {
        $this->dataBase = new DB(); //передаём в защищённое свойство dataBase объект класса DB

    }

    public function getArticles()
    {
        $sql = 'SELECT * FROM news ORDER BY id DESC';
        $data = [];
        $arr = $this->dataBase->query( $sql, $data );

        $this->articles = [];

        foreach ($arr as $s) {

            $this->articles[ $s['id'] ] = new Article($s['head'], $s['text'], $s['author']);

        }

        return $this->articles;

    }

    public function getArticleById($id)
    {
        $sql = 'SELECT * FROM news WHERE id=:id';   //делаем запрос к базе данных
        $data = [':id' => $id];
        $arr = $this->dataBase->query( $sql, $data );   //сохраняем результат запроса - массив - в переменную
        return new Article( $arr[0]['head'], $arr[0]['text'], $arr[0]['author'] );
    }
}
