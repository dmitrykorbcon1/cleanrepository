<?php

namespace App\Models;

class DB
{
    protected $dbh;

    public function __construct()  // передаём в конструктор путь к файлу конфига
    {
        $cfg = require __DIR__ . '/../../configs/config.php';        //подключаем массив из файла конфига

        $this->dbh = new \PDO( $cfg['dsn'], $cfg['usnm'], $cfg['password'] );        //передаём в конструктор метода PDO три параметра, устанавливается и сохраняется соединение с базой данных

    }

    public function execute(string $sql)  // выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
    {
        $sth = $this->dbh->prepare( $sql );   //готовит к выполнению запрос
        
        if (false === $sth) {    // если запрос не принят метод prepare вернёт false
            return false;
        }

        return $sth->execute();  // если запрос принят - запускает подготовленный запрос на выполнение
    }

    public function query(string $sql, array $data)   //выполняет запрос, подставля в него данные $data (подстановка), возвращает данные результата запроса либо false, если выполнение не удалось
    {
        $sth = $this->dbh->prepare( $sql );

        if (false === $sth) {    //подготовка запроса к испольнению не удалась
            return false;
        }

        if ( !$sth->execute($data) ) {  //выполнение запроса не удалось
            return false;
        }

        return $sth->fetchAll();  // если всё нормально - на выходе методом fetchAll получаем массив с данными из БД
    }

}

