<html>
<head>
    <title>Домашка 5</title>
    <meta charset= />
</head>
<body>
<?php
$list = scandir(__DIR__. '/Photo');
$list = array_diff($list, ['.', '..']);
foreach ($list as $img) {
    ?>
<img src="/DZ5_1/Photo/<?php echo $img; ?>" height="250">
    <?php
}
?>