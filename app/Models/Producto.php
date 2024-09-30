<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';  // Nombre de la tabla

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'id_categoria',
        'id_compra',  // Relación con compra
        'id_venta',   // Relación con venta
    ];

    // Relación con Compra (cada producto puede estar asociado a una compra)
    public function compra()
    {
        return $this->belongsTo(Compra::class, 'id_compra');
    }

    // Relación con Venta (cada producto puede estar asociado a una venta)
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta');
    }
}
