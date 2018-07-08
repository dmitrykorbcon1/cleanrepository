<html>
<head>
    <title>Домашка 2</title>
</head>
<body>
<?php
if (isset($_GET['first_num']) == null) {
    $first = 0;
    } else {
    $first = $_GET['first_num'];
    }
if (isset($_GET['second_num']) == null) {
    $second = 0;
    } else {
    $second = $_GET['second_num'];
    }
if (isset($_GET['operator']) == null) {
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
<form action="/cleanrepository/DZ3/2/Index.php" method="get">
    <input type="text" name="first_num"
    value="<?php echo $first; ?>">
    <select size="4" name="operator">
        <option <?php if ($operator=='+') echo 'selected';?> value="+">+</option>
        <option <?php if ($operator=='-') echo 'selected';?> value="-">-</option>
        <option <?php if ($operator=='/') echo 'selected';?> value="/">/</option>
        <option <?php if ($operator=='*') echo 'selected';?> value="*">*</option>
    </select>
    <input type="text" name="second_num" value="<?php echo $second ?>">
    <input type="submit" value="Равно">
    <input type="text" name="result"
    value="<?php echo $result; ?>">
</form>
<!--Данные из формы будем передавать через
суперглобальный массив методом GET обратно в файл и помещаться в соответствтующие поля формы. Результат будет
помещаться в переменную result и выводится в окне result формы-->
</body>
</html>
