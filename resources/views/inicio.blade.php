<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Inicio</title>
</head>

<body>
    <h1>Esto es el inicio</h1>
    <nav>
        <ul>
            <a href="{{ route('calculadora') }}">Calculadora</a>
            <a href="{{ route('imagenes') }}">Imagenes</a>
        </ul>
    </nav>
</body>

</html>
