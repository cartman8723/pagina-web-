<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;// Importar el modelo Product
use App\Models\Category; // Importar el modelo Category
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    public function index( Request $request )

    {
        $categories = Category::all();
        $products = Product::all();
       
   
       
    
        return view('welcome', compact('products', 'request', 'categories' ));  // Pasar los productos a la vista
    }

   
    
}