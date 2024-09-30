<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';  // Nombre de la tabla

    protected $fillable = [
        'id_cliente',
        'monto_total',
        'fecha_venta',
        'detalles',
    ];

    // Relación con Cliente (cada venta pertenece a un cliente)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    // Relación con Productos (una venta puede incluir varios productos)
    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_venta');
    }
}
