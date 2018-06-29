<html>
<head>
    <title>Домашка 2</title>
</head>
<body>
<?php
$first = $_GET['first_num'];
$second = $_GET['second_num'];
$operator = $_GET['operator'];
if ($operator == '+') {
    $result = $first + $second;
   }
elseif ($operator == '-'){
    $result = $first - $second;
  }
elseif ($operator == '/') {
    $result = $first / $second;
    }
elseif ($operator == '*'){
    $result = $first * $second;
    }
?>
<form action="1_3.php" method="get">
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
