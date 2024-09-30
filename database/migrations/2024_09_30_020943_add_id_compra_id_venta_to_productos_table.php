<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdCompraIdVentaToProductosTable extends Migration
{
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->foreignId('id_compra')->nullable()->constrained('compras')->onDelete('set null');
            $table->foreignId('id_venta')->nullable()->constrained('ventas')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign(['id_compra']);
            $table->dropColumn('id_compra');
            
            $table->dropForeign(['id_venta']);
            $table->dropColumn('id_venta');
        });
    }
}
