<!doctype html>
<html lang="en">

<head>
    <title>Iniciar Sesiòn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark  ">
            <a class="navbar-brand px-3 text-gold nav-link" href="#">Super Proteinas</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mt-0 mt-lg-0 " >
                    <li class="nav-item">
                        <a class="nav-link  text-gold px-3 " href="{{ route('welcome') }}" aria-current="page">Inicio<span
                                class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
                    
            </div>
        </nav>
    </header>

    <!-- Vista de login -->
    <div class="container card-login ">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h1 class="card-title text-white text-center">Super Proteinas</h1>
                        <h2 class="card-title text-gold">Iniciar sesión</h2>
                        <form action=" {{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group" >
                                <label for="email" class="text-white">Correo electrónico</label>
                                <input type="email" id="email"  name="email" class="form-control"
                                    placeholder="Ingrese su correo electrónico">
                            </div>
                            <br>
                            
                            <div class="form-group">
                                <label for="password" class="text-white">Contraseña</label>
                                <input type="password" id="password"  name ="password" class="form-control"
                                    placeholder="Ingrese su contraseña">
                            </div>
                            <br>
                             <br>                    
                            <div class="form-group text-center ">
                                <button class="btn btn-gold btn-block mx-auto" type="submit">Iniciar sesión</button>
                            </div>
                            <br>
                            <div class="text-center">
                                <a href="#" class="text-white">¿Olvidó su contraseña?</a>
                            </div>
                            <br>
                            <div class="text-center">
                              <p> ¿No tiene una cuenta? </p>
                              <a href="{{ route('register')}}" class="text-white">Registrate</a>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
