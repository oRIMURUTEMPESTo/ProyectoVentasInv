<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categorias; // Asegúrate de que esto esté correcto
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todas las categorías
        $categorias = Categorias::all();

        // Inicializar la consulta de productos
        $query = Producto::query();

        // Filtrar por nombre si se proporciona
        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        // Filtrar por categoría si se proporciona
        if ($request->filled('categoria_id')) {
            $query->where('idCategoria', $request->categoria_id);
        }

        // Agrupar los productos por nombre y contar la cantidad
        $productos = $query->select('nombre', DB::raw('count(*) as total'))
            ->groupBy('nombre')
            ->get();

        return view('inventario.index', compact('productos', 'categorias'));
    }
}
