<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProveedoresSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('proveedores')->insert([
                'nombre' => $faker->name,
                'empresa' => $faker->optional()->company,
                'telefono' => $faker->optional()->phoneNumber,
                'correo' => $faker->unique()->safeEmail,
                'direccion' => $faker->optional()->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
