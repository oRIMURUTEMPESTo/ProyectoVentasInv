<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .low-stock {
            color: red; /* Color rojo para productos con menos de 5 unidades */
        }
    </style>
</head>
<body>
    <h1>Inventario de Productos</h1>
    
    <!-- Formulario de búsqueda y filtro -->
    <form method="GET" action="{{ route('inventario.index') }}">
        <input type="text" name="nombre" placeholder="Buscar por nombre" value="{{ request('nombre') }}">
        
        <select name="categoria_id">
            <option value="">Seleccionar categoría</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->IdCategoria }}" {{ request('categoria_id') == $categoria->IdCategoria ? 'selected' : '' }}>
                    {{ $categoria->Nombre }}
                </option>
            @endforeach
        </select>
        
        <button type="submit">Filtrar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td class="{{ $producto->total < 5 ? 'low-stock' : '' }}">
                        {{ $producto->total }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
