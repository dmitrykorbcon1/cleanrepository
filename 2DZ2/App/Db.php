<?php

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO( 'mysql:host=localhost;dbname=news', 'root', '' );
    }

    public function query( string $sql, string $class, array $params = [] )
    {
        $sth = $this->dbh->prepare( $sql );

        if ( false !== $sth ) {
            if ( $sth->execute( $params ) ) {

                return $sth->fetchAll( \PDO::FETCH_CLASS, $class );
            }
        }
    }

    public function exequte( string $query, array $params = [] )
    {
        $sth = $this->dbh->prepare( $query );

        if ( false !== $sth ) {

            return  $sth->execute( $params );
        }

        return false;
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }



}

