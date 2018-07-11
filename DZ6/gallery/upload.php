<?php
session_start();

include __DIR__ . '/myFunctions.php';

require __DIR__ . '/../classes/Uploader.php';

if ( null === getCurrentUser() ) {
    header('Location: /cleanrepository/DZ6/gallery/login.php');
    exit;
}
$gallery = new Uploader ('myimg');

$gallery->isUploaded();

$gallery->upload();

?>
<br>
<br>
<a href="/cleanrepository/DZ6/gallery/index.php">В галерею>>>></a><br><br>

