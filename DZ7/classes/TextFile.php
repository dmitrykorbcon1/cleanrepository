<?php
class TextFile
{
    protected $data;

    protected $put;  //для передачи пути к файлу из конструктора, создадим дополнительное свойство $put

    public function __construct($file)
        {
            $this->data = file($file,FILE_IGNORE_NEW_LINES);
            $this->put = $file;
        }

    public function GetData()
        {
            return $this->data;
           // return $this;
        }

        public function save()
        {
            file_put_contents( $this->put, implode("\r\n", $this->data) );
        }
}
//$guests = new TextFile(__DIR__ . '/../guestbook.txt');
