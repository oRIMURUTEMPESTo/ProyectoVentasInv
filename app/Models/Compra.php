<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';  // Nombre de la tabla

    protected $fillable = [
        'id_proveedor',
        'monto_total',
        'fecha_compra',
        'detalles',
    ];

    // Relación con Proveedor (cada compra pertenece a un proveedor)
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    // Relación con Productos (una compra puede tener varios productos)
    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_compra');
    }
}
