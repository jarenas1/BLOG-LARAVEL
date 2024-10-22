<?php

use Illuminate\Support\Facades\Route;

//LLAMAMOS EL CONTROLADOR USANDO NAMESPACE\CONTROLLERNAME
use App\Http\Controllers\HomeController;
//OTRO CONTROLADOR
use App\Http\Controllers\PostController;


//reicibe una url y devuelve el controlador se llama el controlador y luego el metodo deseado
Route::get('/controller', [HomeController::class, "index"]);
Route::get('/posts', [PostController::class, "index"]);
//mismo controllador de arriba, difetente metodo
Route::get('/posts/create', [PostController::class, "create"]);
//RUTA QUE RECIBE PARAMETRO Y LO PASA AL CONTROLADOR, el controlador debe tener como atributo la variable con el mismo nombre
Route::get("/posts/{id}", [PostController::class, "show"]);


//CREACION DE RUTA CON PARAMETROS Y RETORNANDO UNA FUNCION, NO UN CONTROLADOR
Route::get("/laravel/{variable}",function ($variable){
    return "La variable es: ". $variable;
});

//PARAMETROS OPCIONALES, CONDICIONAL Y MULTIPLES PARAMRTROS
// Route::get("/posts/{variable1}/{variable2?}", function ($variable1, $variable2 = null){ //variable 2 opcional, si no se recibe es null
//     if($variable2==null){
//         return "post {$variable1} sin 2 parametros";
//     }
//     return "post {$variable1} COOON 2 parametros";
// });