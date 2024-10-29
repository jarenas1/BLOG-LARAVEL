<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //CREAMOS INSTANCIA
            $user = new User();
            //PASAMOS VALORES
            $user->name = 'John Doe';
            $user->password = bcrypt("010101");
            $user->email = 'john.doe@example.com';
            $user->avatar="asadsada";
            //GUARDAMOS
            $user->save(); 
    }
}
