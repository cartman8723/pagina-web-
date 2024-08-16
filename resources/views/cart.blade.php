<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Estilos adicionales -->
    
    
    <link rel="stylesheet" href="{{ asset('assets/cart.css') }}">
    <style>
        /* Agrega tus estilos personalizados aquí si es necesario */
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-3 text-gold ">Carrito de compras</h1> 
        <a href="{{ route('welcome' ) }}" class="btn btn-primary btn-sm float-end">Seguir comprando</a>
        <br>
        <br>
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr class="text-center ">
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carts as $cart)
                    <tr class="text-center">
                        <td>{{ $cart->product->name }}</td>
                        <td>
                            <form action="{{ route('cart.update', $cart->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <input type="number" name="quantity" value="{{ $cart->quantity }}" min="1" max="100">
                                <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                            </form>
                        </td>
                        <td>$ {{ $cart->product->price }}</td>
                        <td>$ {{ $cart->quantity * $cart->product->price }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $cart->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <th colspan="3">Total</th>
                    <th>$ {{ $carts->sum(function($cart) {
                        return $cart->quantity * $cart->product->price;
                    }) }}</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

       

        
    </div>

    <!-- Bootstrap JS (opcional, solo si necesitas funcionalidades de Bootstrap que requieren JavaScript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
