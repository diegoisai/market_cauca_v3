<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'detalles' => $this->faker->sentence,
            'precio' => rand(1,10),
            'costo_compra' => rand(1,10),
            'descripcion' => $this->faker->text(1200),
            'image_path' => $this->faker->sentence,
        ];
    }
}
