<?php

namespace App;

abstract class Model
{
    protected static $table = null;

    public static function findAll()
    {

        $db = new Db();

        $sql = 'SELECT * FROM ' . static::$table;

        return $db->query( $sql, static::class );

    }

    public static function findById( int $id )
    {
        $db = new Db();

        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';

        $arr = $db->query( $sql, static::class, [':id' => $id] );

        if ( is_array($arr) ) {
            if ( isset( $arr[0] ) ) {

                    return $arr[0];
                }
            }

        return null;
    }

}
