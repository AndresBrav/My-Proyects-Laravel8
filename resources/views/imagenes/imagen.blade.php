<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagenes</title>
    <link rel="stylesheet" href="{{ asset('css/diseñoimagenes.css') }}">

</head>

<body>
    <div class="grid-container">
        @foreach ($imagenes as $imagen)
            @php
                $imagenId = $imagen['id'];
            @endphp
            <a href="{{ route('detallesimagen', $imagenId) }}" class="links">
                <img class="acceso" src="{{ asset($imagen['src']) }}" alt="Imagen {{ $imagen['id'] }}">
            </a>
        @endforeach
    </div>

</body>

</html>
