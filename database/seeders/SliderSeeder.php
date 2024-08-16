<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Ejecutar las semillas de la base de datos.
     */
    public function run(): void
    {
        $sliders = [
            [
                'titulo' => 'Imagen 1',
                'imagen' => 'imagen_carrusel_fittnes.jpg', 
            ],
            [
                'titulo' => 'Imagen 2',
                'imagen' => 'imagen_carrusel_producto_men.png',
            ],
            [
                'titulo' => 'Imagen 3',
                'imagen' => 'imagen_carrusel_producto.jpg',
            ],
            [
                'titulo' => 'Imagen 4',
                'imagen' => 'imagne_carrusel_normal.jpg',
            ],
            
        ];

        foreach ($sliders as $key => $value) {
            Slider::create($value);
        }
    }
}

