<?php


namespace App;


class Loger
{
    public $path;

    public function __construct($path)  // в конструктор передаём путь до файла, где будем хранить логи.
    {
        $this->path = $path;
    }

    public function writeLog($textError, $fileError)
    {
        $write = '//Date errors : ' . date('Y-m-d H:i:s') . '//Text error: ' . $textError . '//File error: ' . $fileError .  "\r\n";

        file_put_contents($this->path, $write, FILE_APPEND);
    }
}