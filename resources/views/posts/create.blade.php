<x-app-layout>
    <h1>crear post</h1>

    {{-- INDICAMOS A DONDE SE ENVIARA LA INFORMACION AL DAR SUBMIT Y CON QUE HTTP METHOD SE ENVIARA --}}

    <form action="/posts" method="POST">

        {{-- CREAMOS UN TOKEN PARA QUE LARAVEL VERIFIQUE QUE EL FORM ES NUESTRO --}}
        @csrf
        <input type="text" name="title" id="" placeholder="titulo">
        <br>
        <input type="text" name="category" placeholder="categoria">
        <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="contenido"></textarea>

        <button type="submit"> crear </button>
    </form>

</x-app-layout>