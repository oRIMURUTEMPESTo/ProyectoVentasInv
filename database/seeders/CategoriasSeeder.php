<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        // Insertar categorías principales: Gringa y China
        DB::table('categorias')->insert([
            [
                'nombre' => 'Gringa',
                'descripcion' => 'Categoría de productos Gringa',
                'id_subcategoria' => null, // Categoría principal
                'id_creador' => 1,
                'estado' => 'activo',
                'created_at' => Carbon::now(),
            ],
            [
                'nombre' => 'China',
                'descripcion' => 'Categoría de productos China',
                'id_subcategoria' => null, // Categoría principal
                'id_creador' => 1,
                'estado' => 'activo',
                'created_at' => Carbon::now(),
            ],
        ]);

        // Subcategorías para Gringa
        $gringaId = DB::table('categorias')->where('nombre', 'Gringa')->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'Cables', 'descripcion' => 'Cables de Gringa', 'id_subcategoria' => $gringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Consolas', 'descripcion' => 'Consolas de Gringa', 'id_subcategoria' => $gringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Parlantes', 'descripcion' => 'Parlantes de Gringa', 'id_subcategoria' => $gringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Micrófonos', 'descripcion' => 'Micrófonos de Gringa', 'id_subcategoria' => $gringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Tipos de cables en Gringa
        $cablesGringaId = DB::table('categorias')->where('nombre', 'Cables')->where('id_subcategoria', $gringaId)->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'Audio', 'descripcion' => 'Cables de audio', 'id_subcategoria' => $cablesGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Video', 'descripcion' => 'Cables de video', 'id_subcategoria' => $cablesGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Poder', 'descripcion' => 'Cables de poder', 'id_subcategoria' => $cablesGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Marcas de consolas en Gringa
        $consolasGringaId = DB::table('categorias')->where('nombre', 'Consolas')->where('id_subcategoria', $gringaId)->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'Yamaha', 'descripcion' => 'Consolas Yamaha', 'id_subcategoria' => $consolasGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Behringer', 'descripcion' => 'Consolas Behringer', 'id_subcategoria' => $consolasGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Allen & Heath', 'descripcion' => 'Consolas Allen & Heath', 'id_subcategoria' => $consolasGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Marcas de parlantes en Gringa
        $parlantesGringaId = DB::table('categorias')->where('nombre', 'Parlantes')->where('id_subcategoria', $gringaId)->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'JBL', 'descripcion' => 'Parlantes JBL', 'id_subcategoria' => $parlantesGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Bose', 'descripcion' => 'Parlantes Bose', 'id_subcategoria' => $parlantesGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Sony', 'descripcion' => 'Parlantes Sony', 'id_subcategoria' => $parlantesGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Activos', 'descripcion' => 'Parlantes activos', 'id_subcategoria' => $parlantesGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Pasivos', 'descripcion' => 'Parlantes pasivos', 'id_subcategoria' => $parlantesGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Marcas de micrófonos en Gringa
        $microfonosGringaId = DB::table('categorias')->where('nombre', 'Micrófonos')->where('id_subcategoria', $gringaId)->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'Shure', 'descripcion' => 'Micrófonos Shure', 'id_subcategoria' => $microfonosGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Sennheiser', 'descripcion' => 'Micrófonos Sennheiser', 'id_subcategoria' => $microfonosGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Rode', 'descripcion' => 'Micrófonos Rode', 'id_subcategoria' => $microfonosGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Inalámbricos', 'descripcion' => 'Micrófonos inalámbricos', 'id_subcategoria' => $microfonosGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'No inalámbricos', 'descripcion' => 'Micrófonos con cable', 'id_subcategoria' => $microfonosGringaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Subcategorías para China
        $chinaId = DB::table('categorias')->where('nombre', 'China')->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'Cables', 'descripcion' => 'Cables de China', 'id_subcategoria' => $chinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Consolas', 'descripcion' => 'Consolas de China', 'id_subcategoria' => $chinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Parlantes', 'descripcion' => 'Parlantes de China', 'id_subcategoria' => $chinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Micrófonos', 'descripcion' => 'Micrófonos de China', 'id_subcategoria' => $chinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Tipos de cables en China
        $cablesChinaId = DB::table('categorias')->where('nombre', 'Cables')->where('id_subcategoria', $chinaId)->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'Audio', 'descripcion' => 'Cables de audio en China', 'id_subcategoria' => $cablesChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Video', 'descripcion' => 'Cables de video en China', 'id_subcategoria' => $cablesChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Poder', 'descripcion' => 'Cables de poder en China', 'id_subcategoria' => $cablesChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Marcas de consolas en China
        $consolasChinaId = DB::table('categorias')->where('nombre', 'Consolas')->where('id_subcategoria', $chinaId)->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'Yamaha', 'descripcion' => 'Consolas Yamaha en China', 'id_subcategoria' => $consolasChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Behringer', 'descripcion' => 'Consolas Behringer en China', 'id_subcategoria' => $consolasChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Allen & Heath', 'descripcion' => 'Consolas Allen & Heath en China', 'id_subcategoria' => $consolasChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Marcas de parlantes en China
        $parlantesChinaId = DB::table('categorias')->where('nombre', 'Parlantes')->where('id_subcategoria', $chinaId)->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'JBL', 'descripcion' => 'Parlantes JBL en China', 'id_subcategoria' => $parlantesChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Bose', 'descripcion' => 'Parlantes Bose en China', 'id_subcategoria' => $parlantesChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Sony', 'descripcion' => 'Parlantes Sony en China', 'id_subcategoria' => $parlantesChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Activos', 'descripcion' => 'Parlantes activos en China', 'id_subcategoria' => $parlantesChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Pasivos', 'descripcion' => 'Parlantes pasivos en China', 'id_subcategoria' => $parlantesChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);

        // Marcas de micrófonos en China
        $microfonosChinaId = DB::table('categorias')->where('nombre', 'Micrófonos')->where('id_subcategoria', $chinaId)->value('id');

        DB::table('categorias')->insert([
            ['nombre' => 'Shure', 'descripcion' => 'Micrófonos Shure en China', 'id_subcategoria' => $microfonosChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Sennheiser', 'descripcion' => 'Micrófonos Sennheiser en China', 'id_subcategoria' => $microfonosChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Rode', 'descripcion' => 'Micrófonos Rode en China', 'id_subcategoria' => $microfonosChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'Inalámbricos', 'descripcion' => 'Micrófonos inalámbricos en China', 'id_subcategoria' => $microfonosChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
            ['nombre' => 'No inalámbricos', 'descripcion' => 'Micrófonos con cable en China', 'id_subcategoria' => $microfonosChinaId, 'id_creador' => 1, 'estado' => 'activo', 'created_at' => Carbon::now()],
        ]);
    }
}
