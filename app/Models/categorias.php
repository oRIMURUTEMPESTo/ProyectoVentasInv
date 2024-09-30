<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Nombre de la tabla

    protected $primaryKey = 'IdCategoria'; // Clave primaria

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Fecha',
        'IdCreador',
        'Estado',
    ];

    public $timestamps = true; // Usar timestamps (created_at y updated_at)
}
