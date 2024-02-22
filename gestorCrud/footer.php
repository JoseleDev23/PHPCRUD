<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        footer {
            flex-shrink: 0;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100"> <!-- Clase flex-column y min-vh-100 para hacer que el cuerpo ocupe toda la altura de la ventana -->
<div class="wrapper">
        <header>
            <!-- Encabezado -->
        </header>

        <main>
            <!-- Contenido principal -->
        </main>
    </div>
    <footer class="mt-auto">
        <div class="container-fluid my-5 px-0">
            <section class="">
                <footer class="text-center text-white" style="background-color: #663b2a">
                    <div class="container p-4 pb-0">
                        <section class="">
                            <p class="d-flex justify-content-center align-items-center">
                                <span class="me-3">¡Échale un ojo a nuestro GitHub!</span>
                                <button type="button" class="btn btn-outline-light btn-rounded">
                                    Sign up!
                                </button>
                            </p>
                        </section>
                    </div>
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        <strong> Juan Antonio Buenestado Gómez & Jose Antonio Muñoz Sarmiento</strong>
                        © 2024 Todos los derechos reservados
                    </div>
                </footer>
            </section>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>