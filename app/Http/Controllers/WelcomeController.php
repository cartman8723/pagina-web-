<?php

namespace App\Http\Controllers;




use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;


class WelcomeController extends Controller
{
    public function index()

    {

        $categories = Category::all();
        $products = Product::all(); 
        return view('welcome', compact('products', 'categories'));
    }


    public function filtrar(Request $request)
{
    $categories = Category::all();  // Obtén todas las categorías
    $categoryId = $request->input('category_id');
    
    // Si $categoryId está vacío, obtén todos los productos
    if (empty($categoryId)) {
        $products = Product::all();
    } else {
        $products = Product::where('category_id', $categoryId)->get();
    }
    
    
    return view('welcome', compact('products', 'categories', 'categoryId'));
    
}

    

}