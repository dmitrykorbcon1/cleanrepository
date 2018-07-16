<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица истинности</title>
</head>
<body>
<h3>Конъюнкция</h3>
        <table border="1">
        <tr align="center">
            <td width="50">a</td>
            <td width="50">b</td>
            <td width="50">a && b</td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>0</td>
            <td>
                <?php
                echo (int)(false && false);
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>1</td>
            <td>
                <?php
                echo (int)(false && true);
                ?>
            </td>
        </tr">
        <tr align="center">
            <td>1</td>
            <td>0</td>
            <td>
                <?php
                echo  (int)(true && false);
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>1</td>
            <td>
                <?php
                echo (int)(true && true);
                ?>
            </td>
        </tr>
</table>
<h3>Дизъюнкция</h3>
<table border="1">
    <tr align="center">
        <td width="50">a</td>
        <td width="50">b</td>
        <td width="50">a || b</td>
    </tr>
    <tr align="center">
        <td>0</td>
        <td>0</td>
        <td>
            <?php
            echo (int)(false || false);
            ?>
        </td>
    </tr>
    <tr align="center">
        <td>0</td>
        <td>1</td>
        <td>
            <?php
            echo  (int)(false || true);
            ?>
        </td>
    </tr">
    <tr align="center">
        <td>1</td>
        <td>0</td>
        <td>
            <?php
            echo  (int)(true || false);
            ?>
        </td>
    </tr>
    <tr align="center">
        <td>1</td>
        <td>1</td>
        <td>
            <?php
            echo  (int)(true || true);
            ?>
        </td>
    </tr>
</table>
<h3>Сложение по модулю 2</h3>
<table border="1">
        <tr align="center">
            <td width="50">a</td>
            <td width="50">b</td>
            <td width="80">a XOR b</td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>0</td>
            <td>
                <?php
               echo (int)(false xor false);
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>1</td>
            <td>
                <?php
                echo (int)(false xor true);
                ?>
            </td>
        </tr">
        <tr align="center">
            <td>1</td>
            <td>0</td>
            <td>
                <?php
                echo (int)(true xor false);
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>1</td>
            <td>
                <?php
                echo (int)(true xor true);
                ?>
            </td>
        </tr>
</table>
</body>
</html>
