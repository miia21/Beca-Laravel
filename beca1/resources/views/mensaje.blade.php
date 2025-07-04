<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    @include('sections.header', ['titulo' => 'Info'])

    <main class="container">
        
        @if(isset ($nom))
            <h1>Mensaje para {{$nom}}</h1>
            <p>holaa cómo estás?</p>
        @else
            <p>hola extraño</p>
        @endif

        @if(isset($edad) && isset($local))
            <h2>Tus datos</h2>
            <p><strong>Edad:</strong> {{$edad}}</p>
            <p><strong>Localidad:</strong> {{$local}}</p>
        @else
            <h2>No tenemos tus datos</h2>
        @endif
        
    </main>

    @include('sections.footer')

</body>
</html>