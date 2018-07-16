<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор 2</title>
</head>
<body>

<?php

if (isset($_GET['firstNum']) == null ) {
    $first = 0;
    } else {
    $first = $_GET['firstNum'];
    }
if (isset($_GET['secondNum']) == null ) {
    $second = 0;
    } else {
    $second = $_GET['secondNum'];
    }
if (isset($_GET['operator']) == null ) {
    $operator = '+';
    } else {
    $operator = $_GET['operator'];
    }
if ($operator == '+') {
    $result = $first + $second;
    } elseif ($operator == '-') {
    $result = $first - $second;
    } elseif ($operator == '/') {
    $result = $first / $second;
    } elseif ($operator == '*') {
    $result = $first * $second;
    }

?>

<form action="/DZ3/2/index.php" method="get">
    <input type="text" name="firstNum"
    value="<?php echo $first; ?>">
    <select size="4" name="operator">
        <option <?php if ($operator=='+') echo 'selected'; ?> value="+">+</option>
        <option <?php if ($operator=='-') echo 'selected'; ?> value="-">-</option>
        <option <?php if ($operator=='/') echo 'selected'; ?> value="/">/</option>
        <option <?php if ($operator=='*') echo 'selected'; ?> value="*">*</option>
    </select>
    <input type="text" name="secondNum" value="<?php echo $second; ?>">
    <input type="submit" value="Равно">
    <input type="text" name="result"
    value="<?php echo $result; ?>">
</form>
<!--Данные из формы будем передавать через
суперглобальный массив методом GET обратно в файл и помещаться в соответствтующие поля формы. Результат будет
помещаться в переменную result и выводится в окне result формы-->
</body>
</html>
