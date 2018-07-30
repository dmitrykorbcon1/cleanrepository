<?php

require __DIR__ . '/../autoload.php';

$Db = new \App\Db();


$query = 'SELECT * FROM news WHERE id=:id';

$param = [ ':id' => 1 ];

var_dump( $Db->exequte( $query, $param ) ); //bool(true)


//ошибка в подстановке
$query = 'SELECT * FROM news WHERE id=:id';

$param = [ ':ip' => 1 ];

var_dump( $Db->exequte( $query, $param) ); //bool(false) и предупреждение (Warning)


//запрос без подстановки
$query = 'SELECT * FROM news';

$param = [ ];

var_dump( $Db->exequte( $query, $param) ); //bool(true)


//пустой запрос
$query = '';

$param = [ ':id' => 1 ];

var_dump( $Db->exequte( $query, $param ) ); //bool(false)


//пустой запрос, пустая подстановка
$query = '';

$param = [ ];

var_dump( $Db->exequte( $query, $param ) ); //bool(false)

//ошибка в запросе (обращение к несуществующей таблице)
$query = 'SELECT * FROM cats WHERE id=:id';

$param = [ ':id' => 1 ];

var_dump( $Db->exequte( $query, $param ) ); //bool(false)



