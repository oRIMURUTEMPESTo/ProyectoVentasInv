<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente')->nullable()->constrained('clientes', 'idCliente')->onDelete('cascade'); // Cliente si aplica
            $table->foreignId('id_proveedor')->nullable()->constrained('proveedores')->onDelete('cascade'); // Proveedor si aplica
            $table->decimal('monto_total', 10, 2); // Monto total del préstamo
            $table->decimal('monto_pagado', 10, 2)->default(0); // Monto ya pagado
            $table->timestamp('fecha_prestamo')->useCurrent(); // Fecha del préstamo
            $table->timestamp('fecha_limite')->nullable(); // Fecha límite para el pago
            $table->text('observaciones')->nullable(); // Observaciones adicionales
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
