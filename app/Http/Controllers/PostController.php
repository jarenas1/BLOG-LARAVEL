<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //TREAER TODOS LOS DATOS
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    //Metodo de crear
    public function create(){
        return view("posts.create");
    }

    public function store(Request $request){
        //REIBIMOS LOS DATOS DEL FORMULARIO
        $post = new Post();
        //asignamos datos entrantes a el objeto creado
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        //guardamos
        $post->save();
        //redireccionamos al index
        return redirect("/posts");
    }

    //Vamos a recibir un parametro, por lo que indicamos en el metodoControlador
    public function show($post){
        //OBTENER UN POST POR ID
        $post = Post::find($post);
        //RETORNAMOS LA VISTA Y PASAMOS EL POST
        return view('posts.show', compact('post'));
    }

    public function edit($post){
        $post = Post::find($post);
        //RETORNAMOS LA VISTA Y PASAMOS EL ID DEL POST
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post){
        //OBTENEMOS EL POST POR ID
        $postById = Post::find($post);
        //asignamos datos entrantes a el objeto
        $postById->title = $request->title;
        $postById->category = $request->category;
        $postById->content = $request->content;
        //guardamos
        $postById->save();
        //redireccionamos al index
        return redirect("/posts/{$post}");
}

    public function destroy($post){
        $post = Post::find($post);

        if($post){
            $post->delete();
        }

        return redirect("/posts");
}
}