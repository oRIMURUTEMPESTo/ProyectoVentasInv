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
            $table->id();
            $table->integer('id_usuario');
            $table->integer('id_producto');
            $table->integer('id_cliente');
            $table->timestamp('fecha')->useCurrent();
            $table->decimal('total', 10, 2)->nullable(false);
            $table->string('estado', 50);
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_cliente')->references('id')->on('clientes');
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
