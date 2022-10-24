<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Productostable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'name' => 'MacBook Pro',
            'detalles' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'precio' => 2499.99,
            'costo_compra' => 29.99,
            'descripcion' => 'MackBook Pro',
            //'image_path' => 'macbook-pro.png'
        ]);

    }
}
