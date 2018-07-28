<?php

require __DIR__ . '/../autoload.php';

$Db = new \App\Db();

$a = $Db->exequte('SELECT * FROM news WHERE id=:id', [':id' => 'D']);

var_dump($a);



$b = $Db->exequte('SELECTed * FROM news', []);

var_dump($b);
