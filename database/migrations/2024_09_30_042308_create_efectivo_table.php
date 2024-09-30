<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEfectivoTable extends Migration
{
    public function up()
    {
        Schema::create('efectivo', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto', 10, 2);  // Monto en la transacción
            $table->string('tipo')->comment('Ingreso o Egreso');  // Tipo de transacción
            $table->boolean('activo')->default(true);  // Estado de la transacción
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('efectivo');
    }
}
