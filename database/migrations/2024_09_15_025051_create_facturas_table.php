<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();  // Identificador de la factura
            $table->foreignId('id_usuario')->constrained('usuarios', 'idUsuario');  // Relación con la tabla 'usuarios'
            $table->foreignId('id_producto')->constrained('productos', 'idproductos');  // Relación con la tabla 'productos'
            $table->foreignId('id_cliente')->constrained('clientes', 'idCliente');  // Relación con la tabla 'clientes'
            $table->timestamp('fecha')->useCurrent();  // Fecha de la factura
            $table->decimal('total', 10, 2);  // Total de la factura
            $table->string('estado', 50);  // Estado de la factura
            $table->timestamps();  // Marcas de tiempo
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
