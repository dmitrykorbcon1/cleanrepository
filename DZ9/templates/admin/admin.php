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
          <li><a href="/DZ9/train/train.php"><span>Проезд</span></a></li>
          <li><a href="/DZ9/gallery/gallery.php"><span>Галерея</span></a></li>
          <li><a href="/DZ9/admin/login.php" class="active"><span>Admin</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="body">
    <div class="body_resize">
        <h2>Добро пожаловать,Admin:</h2>
        <hr>
        <div class="clr"></div>
        <h3>Добавление изображения в галлерею:</h3>
        <form action="/DZ9/gallery/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="myimg">
            <button type="submit">Загрузить...</button>
        </form>
        <hr>
        <h3>Добавление нового поезда:</h3>
        <form action="/DZ9/train/upload.php" method="post" enctype="multipart/form-data">
            Номер поезда:<input type="text" size="7" name="trNum"><br>
            Маршрут следования:<input type="text" size=50" name="trName"><br>
            Время прибытия:<input type="text" size="10" name="arriv"><br>
            Время отправления:<input type="text" size="10" name="depa"><br>
            <button type="submit">Загрузить...</button>
            <button type="reset">Сбросить</button>
        </form>
        <h3>Удаление поезда:</h3>
        <form action="/DZ9/train/deleteTrain.php" method="post" enctype="multipart/form-data">
            Номер удаляемого поезда:<input type="text" size="7" name="trNumDel"><br>
            <button type="submit">Удалить поезд</button>
            <button type="reset">Сбросить</button>
        </form>
        <hr>
        <h3>Изменение текста главной страницы:</h3>
        <form action="/DZ9/admin/admin.php" method="post">
            <p><textarea name="headText" cols="50" rows="20"><?php echo $text ?></textarea></p>
            <p><input type="submit"><button type="reset">Сбросить</button></p>
        </form>
        <a href="/DZ9/admin/logout.php"> Выход </a>
        <div class="clr"></div>
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
