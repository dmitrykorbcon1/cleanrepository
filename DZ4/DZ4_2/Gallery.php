<html>
<head>
    <title>Домашка 4</title>
    <meta charset= />
</head>
<body>
<?php
$list = scandir(__DIR__. '/Photo');
$list = array_diff($list, ['.', '..']);
foreach ($list as $img) {
    ?>
<img src="https://php1.local/DZ4_2/Photo/<?php echo $img; ?>" height="250">
    <?php
}
?>

