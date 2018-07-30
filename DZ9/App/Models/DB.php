<?php

namespace App\Models;

class DB
{
    protected $dbh;

    public function __construct($path)  // передаём в конструктор путь к файлу конфига
    {
        $cfg = require $path;        //подключаем массив из файла конфига
                                                        //куча проверок на корректность полученных данных из внешнего источника (наверное, можно и без них)
        if ( is_array($cfg) ) {                  //проверяем, что в файле конфига действительно находится именно массив
            if ( isset( $cfg['dsn'] ) ) {                //проверяем, что в  массиве файла конфига есть элемент с данными хоста и именем базы данных
                if ( isset( $cfg['usnm'] ) ) {                  // проверяем, что в  массиве файла конфига есть элемент имя пользователя
                    if ( isset( $cfg['password'] ) ) {                  // проверяем, что в  массиве файла конфига есть элемент пароль

                        $this->dbh = new \PDO( $cfg['dsn'], $cfg['usnm'], $cfg['password'] );        //передаём в конструктор метода PDO три параметра, устанавливается и сохраняется соединение с базой данных

                        return;  //выходим из функции
                    }
                }
            }
        }

        die('Ошибка подключения к базе данных');  //если соединение с базой данных не выполнено - убиваем скрипт с сообщением об ошибке

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

