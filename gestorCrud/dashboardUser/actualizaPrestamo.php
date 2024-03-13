<?php
include "header.php";
include "../conexion.php";

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
                    Prestamo de libro
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Información del libro
                        </div>
                        <form class="p-4" method="POST" action="actualizarLibro.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Título</label>
                                <div><?php echo $registro[1] ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Autor</label>
                                <div><?php echo $registro[2] ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Género</label>
                                <div><?php echo $registro[3] ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Año de publicación</label>
                                <div><?php echo $registro[4] ?></div>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $registro[0] ?>">
                            </div>
                            <label for="disponibilidad" class="form-label">Disponibilidad</label>
                            <select class="form-control" name="disponibilidad" id="disponibilidad">
                                <option value="disponible" <?php echo ($registro[5] == 'disponible') ? 'selected' : ''; ?>>Disponible</option>
                                <option value="prestado" <?php echo ($registro[5] == 'prestado') ? 'selected' : ''; ?>>Prestado</option>
                            </select>
                            <button type="submit" class="btn btn-primary">
                                Actualizar
                            </button>
                            <button type="button" onclick="window.location.href='menuUsuario.php'" class="btn btn-secondary">
                                Volver atrás
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>