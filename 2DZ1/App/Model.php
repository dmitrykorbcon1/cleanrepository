<?php

namespace App;

abstract class Model
{
    protected static $table = null;

    public $id;

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

        $arr = $db->query($sql, static::class, [':id' => $id]);

        return $arr[0];
    }

}
