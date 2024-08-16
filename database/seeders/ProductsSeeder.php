<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;


class ProductsSeeder extends Seeder

{
     

    public function run(): void
    {
        $products = [
            [
                'image' => 'assets/productos/combo-proteinas.jpg',
                'name' => 'combo proteinas',
                'description' => 'combo proteinas limpia, para entrenar',
                'price' => 199900,
                'category_id' => 1
            ],
            [
                'image' => 'assets/productos/keratina-1000gr.jpg',
                'name' => 'keratina 1000gr',
                'description' => 'keratina 1000gr limpia para entrenar',
                'price' => 249900,
                'category_id' => 2
            ],
            [
                'image' => 'assets/productos/keratina-powder-2000gr.jpg',
                'name' => 'keratina powder 2000gr',
                'description' => 'keratina 2000gr limpia para entrenar',
                'price' => 349900,
                'category_id' => 2
            ],
            [
                'image' => 'assets/productos/keratina-powder.jpg',
                'name' => 'keratina powder 2000gr',
                'description' => 'keratina 2000gr limpia para entrenar',
                'price' => 349900,
                'category_id' => 2
            ],
            [
                'image' => 'assets/productos/keratina-promo.jpg',
                'name' => 'combo keratinas powder',
                'description' => 'promocion de keratinas para entrenar',
                'price' => 349900,
                'category_id' => 2
            ],
            [
                'image' => 'assets/productos/keratina-suplemnet.jpg',
                'name' => 'keratina powder 1000gr',
                'description' => 'keratina 1000gr limpia para entrenar',
                'price' => 349900,
                'category_id' => 2
            ],
            [
                'image' => 'assets/productos/producto1.jpg',
                'name' => 'proteina ',
                'description' => 'proteina limpia pre- entreno',
                'price' => 259900,
                'category_id' => 1
            ],
            [
                'image' => 'assets/productos/proteina-300gr.jpg',
                'name' => 'proteina limpia',
                'description' => 'proteina limpia para entrenar',
                'price' => 150900,
                'category_id' => 1
            ],
            [
                'image' => 'assets/productos/proteina-800-gr.jpg',
                'name' => 'proteina limpia',
                'description' => 'proteina limpia para entrenar',
                'price' => 150900,
                'category_id' => 1
            ],
            [
                'image' => 'assets/productos/proteina-hipercalorica.jpg',
                'name' => 'proteina limpia',
                'description' => 'proteina limpia para entrenar',
                'price' => 199900,
                'category_id' => 1
            ],
            [
                'image' => 'assets/productos/super-proteina.jpg',
                'name' => 'proteina limpia',
                'description' => 'proteina limpia para entrenar',
                'price' => 299900,
                'category_id' => 1
            ],
        ];
        foreach ($products as $product) {
            Products::create($product);
            
        }
     }
}
 





 