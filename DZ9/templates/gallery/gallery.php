<!DOCTYPE html>
<head>
<title>Галлерея</title>
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
          <li><a href="/DZ9/gallery/gallery.php" class="active"><span>Галерея</span></a></li>
          <li><a href="/DZ9/admin/login.php"><span>Admin</span></a></li>
         </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="body">
    <div class="body_resize">
      <br>      <br>
      <br>
        <?php

        foreach ($images as $img) {

            ?>

            <img src="/DZ9/gallery/Photo/<?php echo $img; ?>" height="300">

            <?php
        }

        ?>
        <div class="clr"></div>
        <br>
        <br>
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
