<?php

require __DIR__ . '/Article.php';

require __DIR__ . '/DB.php';


class News
{
    protected $articles;

    protected $dataBase;

    public function __construct($path) //Новости будем получать из БД. Передаём путь к файлу конфига для подключения к БД
    {
        $this->dataBase = new DB($path); //передаём в защищённое свойство dataBase объект класса DB

    }

    public function getArticles()
    {
        $sql = 'SELECT * FROM news ORDER BY id DESC';
        $data = [];
        $arr = $this->dataBase->query( $sql, $data );

        $this->articles = [];

        foreach ($arr as $s) {
            if ( isset( $s['head'] ) ) {
                if ( isset( $s['text'] ) ) {
                    if ( isset( $s['author'] ) ) {
                        if ( isset( $s['id'] ) ) {

                            $this->articles[ $s['id'] ] = new Article($s['head'], $s['text'], $s['author']);

                        }
                    }
                }
            }
        }

        return $this->articles;

    }

    public function getArticleById($id)
    {
        $sql = 'SELECT * FROM news WHERE id=:id';   //делаем запрос к базе данных
        $data = [':id' => $id];
        $arr = $this->dataBase->query( $sql, $data );   //сохраняем результат запроса - массив - в переменную

        if ( isset( $arr[0]['head'], $arr[0]['text'], $arr[0]['author'] ) ) {      //проверяем, что вложенный массив с 0 индексом содержит индексы head, text и author

            return new Article( $arr[0]['head'], $arr[0]['text'], $arr[0]['author'] );

        }

        return null;

    }
}
