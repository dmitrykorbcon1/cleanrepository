<html>
<head>
    <title>Домашка 3</title>
</head>
<body>
<br>
<form action="5.php" method="get">
    <input type="text" name="first_num">
    <select size="3" name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="text" name="second_num">
    <input type="submit" value="Равно">
    </form>
<?php
// создаем простейшую форму для ввода чисел и выбора знака операции. Данные из формы будем передавать через
// суперглобальный массив методом GET. В этом массиве в качестве ключа выступают имена полей формы name и value,
// а в качестве значений - введённые числа и тип оператора (в виде соответствующей строки).
?>
</body>
</html>
