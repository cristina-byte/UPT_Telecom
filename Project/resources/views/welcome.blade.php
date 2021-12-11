<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proiect BD</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('main.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/01ff707ca4.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased">

    <nav class="navbar navbar-default">
        <a href="/" class="navbar-brand">uptTelecom</a>
        <ul class="menu navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('angajat')}}">Angajati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('client')}}">Clienti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tichet')}}">Tichete</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('serviciu')}}">Servicii</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('factura')}}">Facturi</a>
            </li>
        </ul>
    </nav>

    <section>
        @yield('content')
    </section>
    <footer class="blockquote-footer">
        <p>Creat de Siscanu Cristina, Gheorghiu Nadejda si Bolea Andreea</p>
    </footer>
</body>

</html>
