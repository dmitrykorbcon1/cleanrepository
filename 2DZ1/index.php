<?php

require __DIR__ .'/autoload.php';

$data = \App\Models\Article::lastNews( 3 );

require __DIR__ .'/templates/index.php';

