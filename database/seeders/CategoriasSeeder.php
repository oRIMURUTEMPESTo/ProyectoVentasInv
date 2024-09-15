<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'Nombre' => 'Cables',
                'Descripcion' => 'Cables para audio, video y poder.',
                'IdCreador' => 1,  // Asegúrate de que este ID exista en tu tabla de usuarios
                'Fecha' => now(),
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Consolas',
                'Descripcion' => 'Consolas de sonido y mezcla de diferentes marcas.',
                'IdCreador' => 1,  // Asegúrate de que este ID exista en tu tabla de usuarios
                'Fecha' => now(),
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Parlantes',
                'Descripcion' => 'Parlantes activos y pasivos de distintas marcas y potencias.',
                'IdCreador' => 1,  // Asegúrate de que este ID exista en tu tabla de usuarios
                'Fecha' => now(),
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Micrófonos',
                'Descripcion' => 'Micrófonos inalámbricos y no inalámbricos.',
                'IdCreador' => 1,  // Asegúrate de que este ID exista en tu tabla de usuarios
                'Fecha' => now(),
                'Estado' => 1,
            ],
        ]);
    }
}
