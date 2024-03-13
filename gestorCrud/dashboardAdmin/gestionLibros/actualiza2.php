<?php

include "header.php";
include "../../conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

$productoActualizar = $_GET["id"];
$actualizar = "SELECT * FROM libros WHERE id = '$productoActualizar'";
$registros = mysqli_query($conexion, $actualizar);
$registro = mysqli_fetch_row($registros);

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
        <div class="card shadow">
                <div class="card-header display-6">
                    Actualizar libro
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Ingresar datos
                        </div>
                        <form class="p-4" method="POST" action="actualizar.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $registro[0] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Título</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $registro[1] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Autor</label>
                                <input type="text" class="form-control" name="autor" id="autor" value="<?php echo $registro[2] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Género</label>
                                <input type="text" class="form-control" name="genero" id="genero" value="<?php echo $registro[3] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Año de publicación</label>
                                <input type="number" class="form-control" name="anno" id="anno" value="<?php echo $registro[4] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="disponibilidad" class="form-label fw-bold">Disponibilidad</label>
                                <select class="form-control" name="disponibilidad" id="disponibilidad">
                                    <option value="disponible" <?php echo ($registro[5] == 'disponible') ? 'selected' : ''; ?>>Disponible</option>
                                    <option value="prestado" <?php echo ($registro[5] == 'prestado') ? 'selected' : ''; ?>>Prestado</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Actualizar
                            </button>
                            <button type="button" onclick="window.location.href='menu.php'" class="btn btn-secondary">
                                Volver atrás
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-fluid p-0">
    <footer class="text-center text-white" style="background-color: #663b2a">
        <div class="container p-4 pb-0">
            <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">¡Échale un ojo al GitHub!</span>
                <a class="nav-link" href="https://github.com/Yodel23/PHPCRUD" target="_blank">
                    <img src="../../../img/git.png" width="50px" height="50px" />
                </a>
            </p>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <strong> Juan Antonio Buenestado Gómez & Jose Antonio Muñoz Sarmiento</strong>
            © 2024 Todos los derechos reservados
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>