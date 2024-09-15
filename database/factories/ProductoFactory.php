<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        // Definiciones de nombres para cada categoría
        $productosPorCategoria = [
            7 => ['JBL Charge 5', 'Sony SRS-XB43', 'Bose SoundLink Flex', 'Ultimate Ears Boom 3', 'Harman Kardon Onyx Studio 5'],
            8 => ['Shure SM58', 'Rode NT1-A', 'Sennheiser e835', 'Audio-Technica AT2020', 'AKG C214'],
            5 => ['Cable XLR a TRS', 'Cable de audio RCA', 'Cable de micrófono XLR', 'Cable de guitarra Jack', 'Cable de altavoz de 12 metros'],
            6 => ['Yamaha MG10XU', 'Behringer Xenyx Q802USB', 'Allen & Heath ZED-10', 'Mackie 1202VLZ4', 'Soundcraft EFX8'],
        ];

        // Escoge una categoría y un producto de esa categoría
        $categoriaId = $this->faker->randomElement(array_keys($productosPorCategoria));
        $productoNombre = $this->faker->randomElement($productosPorCategoria[$categoriaId]);

        return [
            'nombre' => $productoNombre,
            'descripcion' => $this->faker->text(100),
            'idCategoria' => $categoriaId, // Asignación de categoría específica usando el ID
            'fecha_ingreso' => $this->faker->dateTimeThisYear(),
            'precio' => $this->faker->randomFloat(2, 50, 1000),
            'costo' => $this->faker->randomFloat(2, 30, 800),
            'estado' => $this->faker->boolean(),
            'idcreador' => 1,
        ];
    }
}
