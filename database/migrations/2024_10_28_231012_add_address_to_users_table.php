<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * ESTE ARCHIVO FUE CREADO CON EL OBJETIVO DE ACTUALIZAR LA TABLA USERS SIN TENER QUE PERDER DATOS DE ELLA, COMO PODEMOS VER
     * ESTA REFERENCIANDO ESA TABLA, POR LO QUE SI DESEAMOS PODEMOS CREAR TABLAS A AÑADIR Y TABLAS A ELIMINAR 
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //COLUMNAS A AÑADIR 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //COLUMNAS A ELIMINAR
        });
    }

    //POR ULTIMO EJECUTAMOS EL COMANDO PHP ARTISAN MIGRATE Y SE MODIFICARA LA TABLA
};
