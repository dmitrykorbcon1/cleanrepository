<?php
$first = $_GET['first_num'];
$second = $_GET['second_num'];
$operator = $_GET['operator'];
if ($operator == '+'){
    echo $first, '+', $second, '=', $first + $second;
}
elseif ($operator == '+'){
    echo $first, '-', $second, '=', $first - $second;
}
elseif ($operator == '/'){
    echo $first, '/', $second, '=', $first / $second;
}
elseif ($operator == '*'){
    echo $first, '*', $second, '=', $first * $second;
}
//var_dump($operator); Значение, возвращаемое переменной $operator - это строка, равная переданной из формы Index.php
// методом GET (в URL файла Showresult.php мы можем видеть передаваемые значения). При выводе выражения просто заменяем
// строку со значением оператора в виде текста на знак соответствующей математической операции и выводим её результат.