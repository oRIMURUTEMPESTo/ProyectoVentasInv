<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prestamos = [
            [
                'id_cliente' => 1,
                'id_proveedor' => 1,
                'monto_total' => 1000.00,
                'monto_pagado' => 200.00,
                'fecha_prestamo' => now(),
                'fecha_limite' => now()->addMonth(),
                'observaciones' => 'Préstamo inicial',
            ],
            [
                'id_cliente' => 2,
                'id_proveedor' => 2,
                'monto_total' => 5000.00,
                'monto_pagado' => 1000.00,
                'fecha_prestamo' => now(),
                'fecha_limite' => now()->addMonths(2),
                'observaciones' => 'Préstamo a corto plazo',
            ],
            [
                'id_cliente' => 3,
                'id_proveedor' => 3,
                'monto_total' => 750.00,
                'monto_pagado' => 150.00,
                'fecha_prestamo' => now(),
                'fecha_limite' => now()->addMonth(),
                'observaciones' => 'Préstamo personal',
            ],
            // Agrega más préstamos aquí
        ];

        foreach ($prestamos as $prestamo) {
            \App\Models\Prestamo::create($prestamo);
        }
    }
}
