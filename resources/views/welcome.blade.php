    <!doctype html>
    <html lang="en">

    <head>
        <title>Super Proteinas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark  ">
            <a class="navbar-brand px-3 text-gold nav-link" href="#">Super Proteinas</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-0 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-gold px-3" href="{{ route('welcome') }}" aria-current="page">Inicio<span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-gold" href="#ofertas">Ofertas</a>
                    </li>
                    
                </ul>
                
                <form class="d-flex w-100 form-control-sm justify-content-center">

                    
                   
                    <input class="form-control form-control-sm w-100" type="text" placeholder="Buscar Proteinas">
                    <button class="btn btn-sm btn-outline-warning mx-5" type="submit">Buscar</button>
                     
                    @guest

                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-warning my-0 my-sm-0 mx-5 ">Ingresar</a>
                    @endguest

                    @auth

                        <ul class="navbar-nav ml-auto">
                            @if (Auth::check())
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link text-gold my-0 my-sm-0  mx-5" href="# "> Bienvenido,{{ Auth::user()->name }}!</a>
                            </li>
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link text-gold px-3" href="{{ route('cart.show')}}">
                                    <button class="bi bi-cart btn btn-dark btn-lg"></button>
                                    
                                </a>
                            </li>
                            
                            <li class="nav-item d-flex align-items-center">
                                <form class="form-control-sm" action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-warning my-0 my-sm-0 mx-3">Salir</button>
                                </form>
                                
                            </li>
                            @endif
                        </ul>
                    @endauth
                </form>
            </div>
        </nav>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5  ">
                        <h1 class="text-gold text-center ">
                            La mejor calidad de proteinas para tu cuerpo
                        </h1>
                        <br>
                        <p class=" text-center m-auto" style= 'color:white '>
                            En Super Proteinas te ofrecemos una gran variedad de proteinas
                            limpias, hipercaloricas, super alimentos, quemadores, anabolicos,
                            pre-entreno, multivitaminicos, y muchas más. Nuestros productos
                            son fabricados con la mejor calidad y cuidado de ingredientes
                            naturales.
                        </p>
                    </div>
                </div>

            </div>
            <br>
            <div class="container ">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/imagen_carrusel_fittnes.jpg') }}" class="d-block w-100"
                                alt="..." style="height: 500px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/imagen_carrusel_producto.jpg') }}" class="d-block w-100"
                                alt="..." style="height: 500px">
                        </div>
                        <div class="carousel-item">
                            <img src=" {{ asset('assets/img/imagne_carrusel_normal.jpg') }}" class="d-block w-100"
                                alt="..." style="height: 500px">
                        </div>
                        <div class="carousel-item">
                            <img src=" {{ asset('assets/img/imagen_carrusel_producto_men.jpg') }}" class="d-block w-100"
                                alt="..." style="height: 500px" style="height: 450px">
                        </div>
                    </div>
                </div>
            </div>

          

            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h2 class="text-gold text-center " id="ofertas">
                            Nuestros Productos
                        </h2>
                    </div>
                </div>
    

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('welcome.filtrar') }}" method="get">
                            <div class="form-group">
                                <label class="text-gold" for="categoria">Filtrar productos por categoría:</label>
                                <br>
                                <br>
                                <div class="select-container" style="width: 300px;">
                                    <select name="category_id" id="categoria" class="form-control" onchange="this.form.submit()">
                                        <option value="">Todos los productos</option>
                                        @foreach($categories as $category)
                                        <option
                                        {{ request()->get('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <br>
            <br>


            <div class="container">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach($products as $product)
                    <div class="col">
                        <form action="{{ route('cart.add', $product->id) }}" method="post">
                            @csrf
                            <div class="card h-100">
                                <img src="{{ asset($product->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $product->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text text-gold">$ {{ $product->price }}</p>
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1" min="1">
                                    <button type="submit" class="btn btn-dark">Añadir al carrito</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
           
            






            
        </header>

        <footer class="footer mt-5 py-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-gold">Acerca de nosotros</h5>
                        <p>Somos una empresa dedicada a brindar soluciones tecnológicas innovadoras y de alta calidad.
                            Nuestro equipo de expertos trabaja para ofrecer productos y servicios que satisfagan tus
                            necesidades.

                            ¡Estamos aquí para ayudarte!</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-gold">Enlaces útiles</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('welcome') }}" class="text-white" style="text-decoration: none;">Inicio</a></li>
                            <li><a href="#ofertas" class="text-white" style="text-decoration: none;">Productos</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-gold">Redes sociales</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/carlosalberto.sanchezosorio?mibextid=ZbWKwL" target="_blank" class="text-white" style="text-decoration: none;"> <i class="fab fa-facebook-f"></i> &nbsp;Facebook</a></li>
                            <li><a href="#" class="text-white" style="text-decoration: none;"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href=" https://www.instagram.com/carlos128sanchez" target="_blank" class="text-white" style="text-decoration: none;"><i class="fab fa-instagram"></i> Instagram</a></li>
                            <li><a href="https://wa.me/3105051348" target="_blank" class="text-white" style="text-decoration: none;"> <i class="fab fa-whatsapp"></i>&nbsp;whatsapp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>&copy; 2024 Tu sitio web. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
    </body>

    </html>
