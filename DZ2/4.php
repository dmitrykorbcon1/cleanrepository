<html>
<head>
    <title>Домашка 2</title>
</head>
<body>
<h3>Определение пола по имени</h3>
<?php
$a='Игорь';//имя
function sexid($a) {
    if (substr($a, -2) == 'б') {
        return '-мужчина';
    } elseif (substr($a, -2) == 'в'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'г'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'д'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'ж'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'з'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'к'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'л'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'м'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'н'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'п'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'р'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'с'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'т'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'ф'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'х'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'ц'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'ч'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'ш'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'щ'){
        return '-мужчина';
    } elseif ($a == 'Никита'){
        return '-мужчина';
    } elseif ($a == 'Савва'){
        return '-мужчина';
    } elseif ($a == 'Илья'){
        return '-мужчина';
    } elseif ($a == 'Игорь'){
        return '-мужчина';
    } elseif (substr($a, -2) == 'я'){
        return '-женщина';
    } elseif (substr($a, -2) == 'а'){
        return '-женщина';
    } elseif (substr($a, -2) == 'ь'){
        return '-скорее всего, женщина';
    }    else {
        return null;
    }
}
echo $a,' ',sexid ($a);
assert( '-мужчина' == sexid('Детектор'));
//var_dump (assert( '-мужчина' == sexid('Детектор')));
?>
</body>
</html>