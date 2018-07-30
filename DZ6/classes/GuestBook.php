<?php

require __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    public function append($text)
        {
            $this->data[] = $text;
        }
}

//$guestbook = new GuestBook (__DIR__ . '/../guestbook.txt');
//var_dump($guestbook);