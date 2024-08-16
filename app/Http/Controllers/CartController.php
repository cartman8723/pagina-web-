<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function show()
    {
        $user = auth()->user();
       

        // Obtener los productos en el carrito del usuario
        $carts = Cart::where('user_id', $user->id)->with('product')->get();

        // Pasar los productos en el carrito a la vista
        return view('cart', compact('carts'));
    }

    public function addProduct(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $user = auth()->user();

        // Verificar si el producto ya está en el carrito
        $cart = Cart::where('user_id', $user->id)
                    ->where('product_id', $productId)
                    ->first();

        if ($cart) {
            // Actualizar la cantidad del producto en el carrito
            $cart->quantity += $request->input('quantity');
            $cart->save();
        } else {
            // Agregar el producto al carrito
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'quantity' => $request->input('quantity'),
            ]);
        }

        return redirect()->route('cart.show');
    }

    public function removeProduct($cartId)
    {
        $user = auth()->user();

        // Obtener el producto en el carrito
        $cart = Cart::where('user_id', $user->id)
                    ->where('id', $cartId)
                    ->first();

        if ($cart) {
            $cart->delete();
            session()->flash('success', 'Producto eliminado del carrito con éxito');
        } else {
            session()->flash('error', 'No se encontró el producto en el carrito');
        }

        return redirect()->route('cart.show') ;
    }

    public function update(Request $request, $id)
{
    $cart = Cart::find($id);
    $cart->quantity = $request->input('quantity');
    $cart->save();
    return redirect()->back()->with('success', 'Cantidad actualizada con éxito');
}

    
}
