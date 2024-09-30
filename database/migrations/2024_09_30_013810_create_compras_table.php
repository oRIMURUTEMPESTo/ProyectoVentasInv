<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();  // Identificador de la compra
            $table->foreignId('id_proveedor')->constrained('proveedores', 'idProveedor')->onDelete('cascade');  // Relación con proveedores
            $table->decimal('monto_total', 10, 2);  // Monto total de la compra
            $table->timestamp('fecha_compra')->useCurrent();  // Fecha de la compra
            $table->text('detalles')->nullable();  // Detalles adicionales si es necesario
            $table->timestamps();  // Timestamps automáticos
        });
    }

    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
