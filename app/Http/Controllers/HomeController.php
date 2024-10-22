<?php

namespace App\Http\Controllers; //DIRECCION DONDE SE ENCUENTRA

use Illuminate\Http\Request;

class HomeController extends Controller //CLASE QUE EXTIENDE LA CLASE BASE DE controller que es una clase abstracta
{
    //CREAMOS UN METODO PARA DEVOLVER UN MENSAJE EN LAS RUTAS
    public function index(){
        return "devolviendo desde el controller";
    }

}
