<?php

namespace App;

/**
 * Class Model
 * @package App
 */
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

        if (empty($arr)) {
            return false;
        }

        return $arr[0] ;
    }

    public function isNew()
    {
        return null === $this->id;
    }

    public function insert()
    {
        if ( !$this->isNew() )
            return false;

        $properties = get_object_vars($this);

        $cols = [];

        $binds = [];

        $data = [];

        foreach ( $properties as $name => $value ) {
            if ( 'id' === $name ) {
                continue;
            }

            $cols[] = $name;

            $binds[] = ':' . $name;

            $data[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::$table . '(' . implode(', ', $cols) . ') VALUES (' . implode(',', $binds) . ')';

        $db = new Db();

        $db->exequte($sql, $data);

        $this->id = $db->lastInsertId();

    }

    public function update()
    {

        $properties = get_object_vars($this);

        $cols = [];

        $data = [];

        foreach ($properties as $name => $value) {

            $data[':' . $name] = $value; //id необходим для подстановки

            if ( 'id' === $name ) {
              continue;
           }

           $cols[] = $name . '=:' . $name;

           }

        $sql = 'UPDATE ' . static::$table . ' SET ' . implode( ', ' , $cols ) . ' WHERE id=:id';

        $db = new Db();

        $db->exequte($sql, $data);

    }

    public function save()
    {
        if ( $this->isNew() ) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete()
    {
        if ( !$this->isNew() ) {

            $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';

            $db = new Db();

            $db->exequte($sql, [':id' => $this->id]);

        } else {
            die;
        }
    }
}
