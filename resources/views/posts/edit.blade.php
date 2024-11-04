<x-app-layout>
    <h1>EDITAR post</h1>

    {{-- INDICAMOS A DONDE SE ENVIARA LA INFORMACION AL DAR SUBMIT Y CON QUE HTTP METHOD SE ENVIARA --}}

    <form action="/posts/{{$post->id}}" method="POST">

        {{-- COMO EL METODO PUT NO EXISTE EN method DEBEMOS AÑADIR LO SIGUIENTE --}}
        @method('PUT')

        {{-- CREAMOS UN TOKEN PARA QUE LARAVEL VERIFIQUE QUE EL FORM ES NUESTRO --}}
        @csrf
        <input type="text" name="title" id="" placeholder="titulo" value="{{$post->title}}">
        <br>
        <input type="text" name="category" placeholder="categoria" value="{{$post->category}}">
        <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="contenido" >{{$post->content}}</textarea>

        <button type="submit"> Actualizar </button>
    </form>

</x-app-layout> 