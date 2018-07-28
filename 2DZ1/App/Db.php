<?php

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO( 'mysql:host=localhost;dbname=news', 'root', '' );
    }

    public function query( string $sql, string $class, $data = [] )
    {
        $sth = $this->dbh->prepare( $sql );

        $sth->execute( $data );

        if ( false !== $sth ) {

            return $sth->fetchAll( \PDO::FETCH_CLASS, $class );
        }
    }

    public function exequte( $query, $params = [] ) //проверка на корректность синтаксиса запроса
    {
        $sth = $this->dbh->prepare( $query );

        return  $sth->execute( $params ); //если запрос выполнен-возвращает true
    }

}

