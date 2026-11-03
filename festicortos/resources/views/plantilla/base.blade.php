<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    @yield('head')
</head>
<body>
    <header class="head1">
        <h1 class="tit1">Festicolors</h1>
        <nav>
            <a href="{{ route('/') }}" class="a1">Home</a></li>
            <a href="{{ route('/corto') }}" class="a1">Lista de cortos</a></li>
        </nav>
        @yield('header')
    </header>
</body>
</html>