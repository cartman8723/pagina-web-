<!doctype html>
<html lang="en">

<head>
    <title>Registrate</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
</head>

<body>

    <!-- Vista de login -->
    <div class="container card-login ">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h1 class="card-title text-white text-center">Super Proteinas</h1>
                        <h2 class="card-title text-gold">Registrate</h2>
                        <form action="{{ route('register')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="text-white">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Ingrese su nombre">
                            </div>
                            <br>

                        

                            <div class="form-group">
                                <label for="email" class="text-white">Correo electrónico</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Ingrese su correo electrónico">
                            </div>

                            <br>
                            
                            <div class="form-group">
                                <label for="password" class="text-white">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Ingrese su contraseña">
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="text-white">Confirmar contraseña</label>
                                <input type="password" id="password_confirmation"name="password_confirmation"   class="form-control"
                                    placeholder="Confirme su contraseña">
                        

                            <br>
                             <br>  

                            <div class="form-group text-center ">
                                <button class="btn btn-gold btn-block mx-auto" type="submit">Registrarse</button>
                            </div>
                            <br>
                            
                            <br>
                            <div class="text-center">
                              <p> ¿ya tienes una cuenta? </p>
                              <a href="{{ route('login')}}" class="text-white">Inicia sesión</a>
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
