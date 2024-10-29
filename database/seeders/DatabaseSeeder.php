<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //LLAMAMOS A TODOS LOS SEEDERS CREADOS ANTERIORMENTE
    $this->call([UserSeeder::class,
                PostSeeder::class]);

                //LLAMADO A FACTORY
                User::factory(10)->create();
    }
}
