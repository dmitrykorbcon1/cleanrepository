<!DOCTYPE html>
<head>
<title>Как добраться</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="/DZ9/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/DZ9/js/cufon-yui.js"></script>
<script type="text/javascript" src="/DZ9/js/arial.js"></script>
<script type="text/javascript" src="/DZ9/js/cuf_run.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu">
        <ul>
            <li><a href="/DZ9/index.php"><span>На главную</span></a></li>
            <li><a href="/DZ9/train/train.php" class="active"><span>Проезд</span></a></li>
            <li><a href="/DZ9/gallery/gallery.php"><span>Галерея</span></a></li>
            <li><a href="/DZ9/admin/login.php"><span>Admin</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="body">
    <div class="body_resize">
      <br>
      <br>
      <br>
      <h2>Расписание поездов дальнего следования по станции Нерехта</h2>
      <br>
      <table border="1">
         <tr align="center">
             <th>Номер поезда</th>
             <th>Маршрут</th>
             <th>Дата прибытия</th>
             <th>Дата отправления</th>
         </tr>
             <?php foreach ($trains as $id => $train) { ?>
                  <tr align="center">
                    <td width="50"><?php echo $train->getTrNum() ?></td>
                    <td width="350"><?php echo $train->getTrName() ?></td>
                    <td width="150"><?php echo $train->getArriv() ?></td>
                    <td width="150"><?php echo $train->getDepa() ?></td>
                  </tr>
          <?php } ?>
      </table>
        <div class="clr"></div>
        </div>
  </div>
    <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; >Korbcon. All Rights Reserved</p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>
