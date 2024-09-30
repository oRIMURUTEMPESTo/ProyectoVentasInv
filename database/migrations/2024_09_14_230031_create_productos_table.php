<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        // Asegúrate de que las tablas relacionadas existan antes de crear esta tabla.
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idproductos');  // Identificador del producto
            $table->string('nombre');  // Nombre del producto
            $table->text('descripcion')->nullable();  // Descripción del producto
            $table->foreignId('idCategoria')
                ->constrained('categorias', 'IdCategoria')  // Relación con la categoría
                ->onDelete('cascade');  // Eliminar productos si se elimina la categoría
            $table->timestamp('fecha_ingreso')->useCurrent();  // Fecha de ingreso
            $table->decimal('precio', 10, 2);  // Precio del producto
            $table->decimal('costo', 10, 2);  // Costo del producto
            $table->boolean('estado')->default(1);  // Estado del producto
            $table->foreignId('idcreador')
                ->constrained('usuarios', 'idUsuario')  // Relación con el usuario
                ->onDelete('cascade');  // Eliminar productos si se elimina el usuario
            $table->timestamps();  // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');  // Eliminar la tabla productos
    }
}
