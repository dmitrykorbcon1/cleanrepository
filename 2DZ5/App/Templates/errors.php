<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>
<body>
<style>
body    { background: url(/2DZ5/App/Templates/errors.jpg); background-size:100%}
p       { text-align: center; font-size: 20pt; color: #dfdfdf;}
</style>
<p>
    <?php

    if ( is_array($errors) ) {
        foreach ($errors as $error) {
            echo 'Error!: ' . $error ?> <br> <?php ;
        }
    } else {
        echo 'Error!: ' . $errors;
    }
    ?>
    <br>
    <a href="/2DZ5/admin"><button>Перейти в админ-панель</button></a>
    <br>
    <a href="/2DZ5/index"><button>Перейти на главную</button></a>
</p>
</body>
</html>

