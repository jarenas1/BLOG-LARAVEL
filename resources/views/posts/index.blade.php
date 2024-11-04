<x-app-layout>

    <h1>POSTS</h1>

    <a href="/posts/create">CREAR POST</a>
{{-- USAMOS EL FOREACH PARA ITERAR LA DATA QUE ENVIAMOS A LA VISTA, DONDE CADA ITERACION LA DATA DE ESA POSICION SE LLAMARA POST --}}
    @foreach ($posts as $post )
        {{-- CREAMOS UNA LISTA PARA QUE SE VEA MAS ORDENADO --}}
        <li>
            {{--HAREMOS QUE NOS REDIRIJA A UNA RUTA EN LA CUAL PODREMOS VER LOS DETALLES DEL POST--}}
            <a href="/posts/{{$post->id}}">
                {{$post->title}} {{--ACCEDEMOS A LA PROPIEDAD TITULO DEL POST --}}
            </a>
        </li>
    @endforeach
</x-app-layout>