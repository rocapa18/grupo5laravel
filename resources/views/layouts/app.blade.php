<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/styleLogin2.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styleHome.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styleHome.css">
    <link rel="stylesheet" href="css/stylePlantilla.css">

    <link rel="stylesheet" href="css/aldo.css">
    <link rel="stylesheet" href="css/aller.css">
    <link rel="stylesheet" href="css/icomoon.css">


</head>
<body>
    
    <div class="container-fluid">
        <header>
            <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/home">HOME</a>
                        <a class="dropdown-item" href="/contacto">CONTACTO</a>
                        <!--
                        <a class="dropdown-item" href="/perfil">PERFIL</a>
                    -->
                        <a class="dropdown-item" href="/faq">FAQ</a>   
                    </div>
                </li>
            </ul>   
            <div class="nav">
                <nav id="principal">
                    <img src="img/logo5t.png" alt="logo" id="logoChico">
                    <h2>DH - Grupo 5</h2> 
                    <ul>
                        <li><a href="/home">HOME</a></li>
                        <li><a href="/contacto">CONTACTO</a></li>
                        <!--
                        <li><a href="/perfil">PERFIL</a></li>
                    -->
                        <li id="faq"><a href="/faq">FAQ</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>


        <main class="py-4">
            @yield('content')
        </main>    
</body>
</html>
