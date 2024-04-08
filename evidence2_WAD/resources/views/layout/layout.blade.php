<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>View: @yield('view')</h1>
    @yield('content')

    <br>
    <h3>Estudiante: Celic Gabriel Hernández Archundia</h3>
    <h3>ID: 2877240</h3>
</body>
</html>
