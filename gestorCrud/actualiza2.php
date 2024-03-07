<?php

include "header.php";
include "conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

$productoActualizar = $_GET["id"];
$actualizar = "SELECT * FROM libros WHERE id = '$productoActualizar'";
$registros = mysqli_query($conexion, $actualizar);
$registro = mysqli_fetch_row($registros);

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
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
                                <label for="" class="form-label">Título</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $registro[1] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Autor</label>
                                <input type="text" class="form-control" name="autor" id="autor" value="<?php echo $registro[2] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Género</label>
                                <input type="text" class="form-control" name="genero" id="genero" value="<?php echo $registro[3] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Año de publicación</label>
                                <input type="number" class="form-control" name="anno" id="anno" value="<?php echo $registro[4] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="disponibilidad" class="form-label">Disponibilidad</label>
                                <select class="form-control" name="disponibilidad" id="disponibilidad">
                                    <option value="disponible" <?php echo ($registro[5] == 'disponible') ? 'selected' : ''; ?>>Disponible</option>
                                    <option value="prestado" <?php echo ($registro[5] == 'prestado') ? 'selected' : ''; ?>>Prestado</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Actualizar">
                            </div>
                        </form>
                    </div>
                </div>
                <a href="menu.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include "footer.php";
?>