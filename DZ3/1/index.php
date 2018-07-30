<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>
<br>
<form action="/DZ3/1/showresult.php" method="get">
    <input type="text" name="firstNum">
    <select size="3" name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="text" name="secondNum">
    <input type="submit" value="Равно">
    </form>
<!--// создаем простейшую форму для ввода чисел и выбора знака операции. Данные из формы будем передавать через
// суперглобальный массив методом GET. В этом массиве в качестве ключа выступают имена полей формы name и value,
// а в качестве значений - введённые числа и тип оператора (в виде соответствующей строки).
-->
</body>
</html>
