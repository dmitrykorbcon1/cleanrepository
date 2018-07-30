<?php

$first = $_GET['firstNum'];

$second = $_GET['secondNum'];

$operator = $_GET['operator'];

if ( $operator == '+' ) {
    echo $first . '+' . $second . '=' . ( $first + $second );
} elseif ( $operator == '+' ) {
    echo $first . '-' . $second . '=' . ( $first - $second );
} elseif ( $operator == '/' ) {
    echo $first . '/' . $second . '=' . ( $first / $second );
} elseif ( $operator == '*' ) {
    echo $first . '*' . $second . '=' . ( $first * $second );
}
//var_dump($operator); Значение, возвращаемое переменной $operator - это строка, равная переданной из формы index.php
// методом GET (в URL файла showresult.php мы можем видеть передаваемые значения). При выводе выражения просто заменяем
// строку со значением оператора в виде текста на знак соответствующей математической операции и выводим её результат.
