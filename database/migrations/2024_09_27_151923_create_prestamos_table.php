<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id(); // Identificador del préstamo
            $table->unsignedBigInteger('id_cliente')->nullable(); // Llave foránea a clientes
            $table->unsignedBigInteger('id_proveedor')->nullable(); // Llave foránea a proveedores
            $table->decimal('monto_total', 10, 2); // Monto total del préstamo
            $table->decimal('monto_pagado', 10, 2)->default(0); // Monto ya pagado
            $table->timestamp('fecha_prestamo')->useCurrent(); // Fecha del préstamo
            $table->timestamp('fecha_limite')->nullable(); // Fecha límite para el pago
            $table->text('observaciones')->nullable(); // Observaciones adicionales
            $table->timestamps();

            // Definir llaves foráneas
            $table->foreign('id_cliente')->references('idCliente')->on('clientes')->onDelete('cascade');
            $table->foreign('id_proveedor')->references('idProveedor')->on('proveedores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
