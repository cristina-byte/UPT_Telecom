<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/01ff707ca4.js" crossorigin="anonymous"></script>
</head>
<body class="antialiased">

<div class="container">
    <nav class="navbar navbar-default">
        <h3 class="logo">LOGO</h3>
        <ul class="menu">
            <li class="menu_item">
                <a href="{{route('angajat')}}">Angajati</a></li>
            <li class="menu_item">
                <a href="{{route('client')}}">Clienti</a></li>
                <li class="menu_item">
                <a href="{{route('tichet')}}">Tichete</a></li>
                <li class="menu_item">
                <a href="{{route('serviciu')}}">Servicii</a></li>
                <li class="menu_item">
                <a href="{{route('factura')}}">Facturi</a></li>
        </ul>
    </nav>
</div>

<section>
    @yield('content')   
</section>>






</body>
</html>
