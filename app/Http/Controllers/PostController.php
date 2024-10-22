<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "controlador 2";
    }

    //Metodo de crear
    public function create(){
        return "Crear post";
    }

    //Vamos a recibir un parametro, por lo que indicamos en el metodoControlador
    public function show($post){
        return "Aqui se mostrara el post $post";
    }
}
