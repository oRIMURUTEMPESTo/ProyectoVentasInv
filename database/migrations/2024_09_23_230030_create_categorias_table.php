<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('IdCategoria');  // Identificador de la categoría
            $table->string('Nombre');
            $table->text('Descripcion')->nullable();
            $table->unsignedBigInteger('IdSubcategoria')->nullable();  // Relación de subcategoría
            $table->foreign('IdSubcategoria')->references('IdCategoria')->on('categorias')->onDelete('cascade');  // Auto-relación de la categoría
            $table->timestamp('Fecha')->useCurrent();  // Fecha de creación de la categoría
            $table->foreignId('IdCreador')->constrained('usuarios', 'idUsuario')->onDelete('cascade');  // Usuario que creó la categoría, referenciado por 'idUsuario'
            $table->boolean('Estado')->default(1);  // Estado de la categoría
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
