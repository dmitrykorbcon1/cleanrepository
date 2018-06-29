<html>
<head>
    <title>Домашка 2</title>
</head>
<body>
<?php
include __DIR__ . '/my_function.php';
?>
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
                echo conj(0,0);
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>1</td>
            <td>
                <?php
                echo conj(0,1);
                ?>
            </td>
        </tr">
        <tr align="center">
            <td>1</td>
            <td>0</td>
            <td>
                <?php
                echo  conj(1,0);
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>1</td>
            <td>
                <?php
                echo conj(1,1)
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
            echo  dizj(0,0);
            ?>
        </td>
    </tr>
    <tr align="center">
        <td>0</td>
        <td>1</td>
        <td>
            <?php
            echo  dizj(0,1);
            ?>
        </td>
    </tr">
    <tr align="center">
        <td>1</td>
        <td>0</td>
        <td>
            <?php
            echo  dizj(1,0);
            ?>
        </td>
    </tr>
    <tr align="center">
        <td>1</td>
        <td>1</td>
        <td>
            <?php
            echo  dizj(1,1);
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
               echo summod2(0,0);
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>1</td>
            <td>
                <?php
                echo summod2(0,1);
                ?>
            </td>
        </tr">
        <tr align="center">
            <td>1</td>
            <td>0</td>
            <td>
                <?php
                echo summod2(1,0);
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>1</td>
            <td>
                <?php
                echo summod2(1,1);
                ?>
            </td>
        </tr>
</table>
</body>
</html>
