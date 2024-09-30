<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cliente',
        'id_proveedor',
        'monto_total',
        'monto_pagado',
        'fecha_prestamo',
        'fecha_limite',
        'observaciones',
    ];
}
