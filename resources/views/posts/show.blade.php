<x-app-layout>

    <a href="/posts">Volver a posts</a>
    <h1>titulo: {{$post->title}}</h1>
    <p>
        <b>Categoria: </b>{{$post->category}}
    </p>
    <p>{{$post->content}}</p>

    {{-- PASAMOS EL ID DEL POST QUE YA HABIAMOS PASADO A ESTA VISTA ANTERIORMENTE --}}
    <a href="/post/{{$post->id}}/edit">EDITAR POST</a>

    {{-- CREAMOS UN FORMULARIO Y NO UN ENLACE COMO ARRIBA YA QUE LOS ENLACES SOLO HACEN EL METODO GET Y NECESITAMOS EL DELETE --}}
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE');
        <button type="submit">ELIMINAR</button>
    </form>
</x-app-layout>