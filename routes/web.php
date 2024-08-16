<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\support\Facades\Auth\logout;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();





// carrosuel de imagenes
Route::get('/slider', 'SliderController@index');



// inicio de sesion

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'destroy'])->name('logout');



// registro usuarios

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');

//product

Route::get('/', 'App\Http\Controllers\ProductsController@index');



//ruta welcome

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

//filtros
Route::get('/filtar', [App\Http\Controllers\WelcomeController::class, 'filtrar'])->name('welcome.filtrar');


// carrito de compras


Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/cart/add/{productId}', [CartController::class, 'addProduct'])->name('cart.add');
Route::delete('/cart/remove/{cartId}', [CartController::class, 'removeProduct'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::patch('/cart/{id}',[CartController::class, 'update']) ->name('cart.update');



// categorias

Route::get('/categories/{category_id}', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}/productos', [CategoriesController::class, 'productos'])->name('categories.productos');   