<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idproductos');  // Identificador del producto
            $table->string('nombre');
            $table->text('descripción')->nullable();
            $table->foreignId('idCategoria')->constrained('categorias');  // Relación con la categoría
            $table->timestamp('fecha_ingreso')->useCurrent();  // Fecha de ingreso
            $table->decimal('precio', 10, 2);  // Precio del producto
            $table->decimal('costo', 10, 2);  // Costo del producto
            $table->boolean('estado')->default(1);  // Estado del producto
            $table->foreignId('idcreador')->constrained('usuarios');  // Usuario que creó el producto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
