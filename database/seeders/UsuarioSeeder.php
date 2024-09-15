<?php

namespace Database\Seeders; // El espacio de nombres correcto según la ubicación

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Juan Pérez',
            'usuario' => 'jperez',
            'contraseña' => bcrypt('password123'),
            'correo' => 'jperez@example.com',
            'cel' => '1234567890',
            'rango' => 'admin',
            'estado' => 1,
            'fecha_creacion' => now(),
        ]);
    }
}
