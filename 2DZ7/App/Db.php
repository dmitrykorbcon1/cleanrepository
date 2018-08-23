<?php

namespace App;

/**
 * Class Db
 * @package App
 */
class Db
{
    protected $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new \PDO( 'mysql:host=localhost;dbname=news', 'root', '' );
        } catch (\PDOException $except ) {
            throw new DbException('Ошибка подключения к БД!');  //ошибка подключения к БД
        }
    }

    public function query(string $sql, string $class, array $params = [])
    {
        try {
            $sth = $this->dbh->prepare($sql);
        } catch (\PDOException $except) {
            throw new DbException('Ошибка запроса к БД!');  //ошибка запроса к БД
        }

        if (false !== $sth) {
            if ($sth->execute($params)) {

                return $sth->fetchAll( \PDO::FETCH_CLASS, $class );
            }
        }
    }

    public function exequte(string $query, array $params = [])
    {
        $sth = $this->dbh->prepare($query);

        if (false !== $sth) {

            return  $sth->execute($params);
        }

        return false;
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function queryEach(string $sql, string $class, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);

        if (false !== $sth) {
            if ($sth->execute($params)) {

                $sth->setFetchMode(\PDO::FETCH_CLASS, $class);

                while ($row = $sth->fetch()) {
                    yield $row;
                }
            }
        }
    }

}
