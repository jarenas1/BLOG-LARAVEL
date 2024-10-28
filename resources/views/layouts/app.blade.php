{{-- PLANTILLA DEL COLIGO --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <header>

    </header>
    {{-- LO QUE VARIA DE LA FORMA CON COMPONENTES A ESTA ES LA FORMA DE LLAMAR EL CONTENIDO VARIABLE --}}
    @yield("content")
    <footer></footer>
</body>
</html>