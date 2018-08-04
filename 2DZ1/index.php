<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findLast( 5 );

include __DIR__ . '/templates/index.php';

