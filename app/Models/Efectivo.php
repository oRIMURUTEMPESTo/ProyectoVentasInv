<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Efectivo extends Model
{
    use HasFactory;

    protected $table = 'efectivo';

    protected $fillable = [
        'monto',
        'tipo',
        'activo',
    ];

    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }

    public function scopeIngresos($query)
    {
        return $query->where('tipo', 'Ingreso')->activos();
    }

    public function scopeEgresos($query)
    {
        return $query->where('tipo', 'Egreso')->activos();
    }
}
