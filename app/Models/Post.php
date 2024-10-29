<?php

namespace App\Models;
//IMPORTAMOS PARA EL MUTADOR
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //INDICAMOS LA TABLA QUE MAPEARA
    protected $table = 'post';

    //CREAREMOS UN MUTADOR el cual servira para title  EL : Attribute INDICA QUE EL METODO DEBE RETORNAR UNA INSTANCIA DE ESTE
    protected function title(): Attribute{
        return Attribute::make(set: Function($value){ //desde value vamos a recuperar el valor que mande el usuario
            return strtolower($value); //CADA QUE ENTRE UN TITLE SE CONVERTIRA EN MINUSCULA
        },
        //AHORA CREAREMOS EL METODO :get QUE TAMBIEN VA DENTRO DEL MAKE Y SIRVE PARA MODIFICAR UN VALOR AL MOSTRARLO
        get: function($campo){
            return ucfirst($campo); //pasa primera a mayuscula
        }
        );
    }
}
