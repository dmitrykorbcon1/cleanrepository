<?php

session_start();

require __DIR__ . '/../autoload.php';

$auth = new \App\Models\Authorize();

$auth->exitUser();

header( 'Location: /DZ9/index.php' );