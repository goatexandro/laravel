<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Alumno extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumno')->insert([
            'nombre' => 'Mario',
                'telefono' => '1234567890',
                'edad' => 65,
                'password' => ('contaseña'),  
                'email' => 'mi@gmail.com',
                'sexo' => 'Hombre'

        ]);
    }
}
