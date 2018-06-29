<html>
<head>
    <title>Домашка 1</title>
</head>
<body>
<h3> Задание 3</h3>
<?php
  echo ('Конструкция var_dump (3/1) выведет в поток     ');
  var_dump(3/1);
?>
<br>
<?php
echo ('Конструкция var_dump (1/3) выведет в поток     ');
var_dump(1/3);
?>
<br>
<?php
echo ('Конструкция var_dump (`20cats` + 40 ) выведет в поток     ');
var_dump('20.5cats'+40);
?>
<br>
<?php
echo ('Конструкция var_dump (18 % 4 ) выведет в поток     ');
var_dump(18%4);
?>
<br>
<h3>Задание 4</h3>
<?php
$x = ($y = 12) - 8;
echo ('Результатом $x = ($y = 12) - 8 будет  ');
var_dump($x);
?>
<br>
<h3>Задание 5</h3>
<?php
echo ('Выражение 1==1.0 возвращает   ' );
var_dump(1==1.0);
?>
<br>
<?php
echo ('Выражение 1===1.0 возвращает   ' );
var_dump(1===1.0);
?>
<br>
<?php
echo ('Выражение `02` == 2 возвращает   ' );
var_dump('02'==2);
?>
<br>
<?php
echo ('Выражение `02` === 2 возвращает   ' );
var_dump('02'===2);
?>
<br>
<?php
echo ('Выражение `02` == `2` возвращает   ' );
var_dump('02'==2);
?>
<br>
<h3>Задание 7</h3>
<?php
$x = true xor true;
var_dump($x);
?>
</body>
</html>
