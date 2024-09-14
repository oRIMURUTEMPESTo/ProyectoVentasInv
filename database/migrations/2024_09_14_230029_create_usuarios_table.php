<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('idUsuario');  // Identificador del usuario
            $table->string('nombre');
            $table->string('usuario')->unique();  // Nombre de usuario
            $table->string('contraseña');  // Contraseña encriptada
            $table->string('correo')->unique();
            $table->string('cel', 15);  // Número de teléfono
            $table->string('rango');  // Rango de usuario
            $table->boolean('estado')->default(1);  // Activo o Inactivo
            $table->timestamp('fecha_creacion')->useCurrent();  // Fecha de creación
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
