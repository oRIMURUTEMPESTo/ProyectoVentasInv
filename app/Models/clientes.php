<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // Si el nombre de la tabla no sigue la convención plural, puedes especificarlo:
    // protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'correo',
        'cel',
        'direccion',
        'empresa',
        'estado',
    ];

    // Relación con el modelo Venta
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_cliente');
    }
}
