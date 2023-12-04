<!doctype html>
<html lang="es">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script defer src="JS/bootstrap.bundle.js"></script>
    <script defer src="JS/script.js"></script>
</head>

<body>
    <header>

    </header>
    <main>
        <section>
            <h1 class="">BANCORIA</h1>
        </section>
        <section>
            <div id="reloj"></div>

            <div class="sesion">
                <h2 id="titulo">Crear usuario:</h2>
                <div class="caja col-xxl-4 col-lg-6 col-md-8 col-sm-8">
                    <div class="w-100" id="crearcuenta">
                        <form action="php/registro.php" id="registrarUser" method="post" class="w-100">
                            <div class="nombre d-flex justify-content-around">
                                <div class="mb-3 col-4 px-2">
                                    <label for="username" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="username" id="username" required>
                                </div>
                                <div class="mb-3 col-8 px-2">
                                    <label for="apellidos" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                                </div>
                            </div>
                            <div class="nombre d-flex justify-content-around">
                                <div class="mb-3 col-6 px-2">
                                    <label for="dni" class="form-label">DNI</label>
                                    <input type="text" class="form-control" name="dni" id="dni" onclick="validarDNI()" required>
                                </div>
                                <div class="mb-3 col-6 px-2">
                                    <label for="fNac" class="form-label">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="fNac" id="fNac" required>
                                </div>
                            </div>

                            <div class="mb-3 px-2">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="mb-3 px-2">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" required>
                            </div>
                            <div class="mb-3 px-2">
                                <label for="cp" class="form-label">Código postal</label>
                                <input type="number" class="form-control" name="cp" id="cp" required>
                            </div>
                            <div class="mb-3 px-2">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" name="ciudad" id="ciudad" required>
                            </div>
                            <div class="mb-3 px-2">
                                <label for="provincia" class="form-label">Provincia</label>
                                <input type="text" class="form-control" name="provincia" id="provincia" required>
                            </div>
                            <div class="mb-3 px-2">
                                <label for="pais" class="form-label">País</label>
                                <input type="text" class="form-control" name="pais" id="pais" required>
                            </div>
                            <input type="submit" value="Crear cuenta">
                        </form>
                        <button onclick="incioCreado('iniciar')">Iniciar sesion</button>
                    </div>

                    <div class="ocultar" id="iniciarsesion">
                        <form action="php/validador.php" id="registrarUser" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label guga">Correo electronico</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <input type="submit" value="Iniciar sesión">
                        </form>
                        <button onclick="incioCreado('crear')">Crear cuenta</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>