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
    <div class="max-w-4xl mx-auto px-4">
        <h1>Hola pa</h1>
        {{-- LLAMAMOS COMPONENTE DE LA ALERTA , usando x-componentName --}}
        <x-alert type="danger">
            {{-- ENVIAREMOS VALOR DE LAS VARIABLES INDICANDO SU NOMBRE PARA REFERENCIARLAS --}}
            <x-slot name="alertContent">
                contenido de la alerta
            </x-slot>

            <x-slot name="alertTittle">
                titulo de la alerta
            </x-slot>
        </x-alert>
    </div>
</body>
</html>