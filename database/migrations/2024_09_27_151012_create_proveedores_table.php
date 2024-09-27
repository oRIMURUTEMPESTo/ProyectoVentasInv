<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('idProveedor'); // Identificador de proveedor
            $table->string('nombre');
            $table->string('empresa')->nullable();
            $table->string('telefono', 15)->nullable();
            $table->string('correo')->unique();
            $table->string('direccion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
