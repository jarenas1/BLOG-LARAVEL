{{-- EN CASO DE QUE ESTUBIERAMOS USANDO PLANTILLAS, DEBERIAMOS LLAMAR LA PLANTILLA ASÍ: --}}
@extends("layouts.app")

{{-- LUEGO ENCERRAMOS NUESTRO COMPONENTE EN --}}
@section("content") {{-- CONTENT ES EL NOMBRE DEL CONTENIDO VARIABLE DECLARADO EN EL LAYOUT --}}
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

@endsection

{{-- EN CASO DE QUE ESTEMOS USANDO COMPONENTES, SIMPLEMENTE LLAMAMOS EL COMPONENTE DEL LAYOUT, CON ETIQUETAS Y METEMOS DENTRO EL CONTENIDO --}}
<x-app-layout>
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

</x-app-layout>