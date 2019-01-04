<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
<link href="{{ asset('css/my.css') }}" rel="stylesheet" type="text/css">
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <img src="https://board-stickers.ru/54371/nogu-svelo.jpg" width="80">
        <ul id="navbar" class="menu">
            @if (Route::has('login'))
                @auth
                <li><a class="nav-link" href="/admin">На главную</a></li>
                <li><a class="nav-link" href="/admin/group">О группе</a></li>
                <li><a class="nav-link" href="/admin/music">Дискография</a></li>
                <li><a class="nav-link" href="/logout">Выйти</a></li>
                @else
                <li><a class="nav-link" href="/">На главную</a></li>
                <li><a class="nav-link" href="/group">О группе</a></li>
                <li><a class="nav-link" href="/music">Дискография</a></li>
                <li><a class="nav-link" href="{{ route('login') }}">Вход</a></li>
                @endauth
            @endif
        </ul>
    </div>
</nav>
<br>
<div>
    @yield('content')
</div>
<br>
</body>




