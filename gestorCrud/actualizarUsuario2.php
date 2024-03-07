<?php

include "header.php";
include "conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

$usuarioActualizar = $_GET["id"];
$actualizar = "SELECT * FROM usuarios WHERE id = '$usuarioActualizar'";
$registros = mysqli_query($conexion, $actualizar);
$registro = mysqli_fetch_row($registros);

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Actualizar usuario
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Ingresar datos
                        </div>
                        <form class="p-4" method="POST" action="actualizarUsuario3.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $registro[0] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $registro[1] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="correo" id="correo" value="<?php echo $registro[2] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Contraseña</label>
                                <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $registro[3] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">DNI</label>
                                <input type="number" class="form-control" name="dni" id="dni" value="<?php echo $registro[4] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Edad</label>
                                <input type="number" class="form-control" name="edad" id="edad" value="<?php echo $registro[5] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $registro[6] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="rol" class="form-label">Rol</label>
                                <select class="form-control" name="rol" id="rol">
                                    <option value="admin" <?php echo ($registro[7] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                    <option value="usuario" <?php echo ($registro[7] == 'usuario') ? 'selected' : ''; ?>>Usuario</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Actualizar">
                            </div>
                        </form>
                    </div>
                </div>
                <a href="menuGestionUser.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include "footer.php";
?>