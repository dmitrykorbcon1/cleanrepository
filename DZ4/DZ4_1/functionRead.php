<?php

function read()
{
    return file( __DIR__ . '/guestbook.txt' , FILE_IGNORE_NEW_LINES);
}
//var_dump(file(__DIR__ . '/guestbook.txt'));