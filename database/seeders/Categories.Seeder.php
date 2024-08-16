<?php

namespace App\Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{


    public function run():void
    {
        $categories = [
            [
                'name' => 'proteinas'
            ],
            [
                'name' => 'keratina'
            ],
        ];
        
        
    }
}
  