<?php

include "header.php";
include "conexion.php";

mysqli_select_db($conexion, "productosbd");

$productoActualizar = $_GET["id"];
$actualizar = "SELECT * FROM productos WHERE id_producto = '$productoActualizar'";
$registros = mysqli_query($conexion, $actualizar);
$registro = mysqli_fetch_row($registros);

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Actualiza el Producto
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Ingresar Datos
                        </div>
                        <form class="p-4" method="post" action="actualiza3.php?idmodifica=<?php echo $productoActualizar; ?>&nombreimagen=<?php echo $registro[4] ?>" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="" class="form-label">Identificador</label>
                                <input type="number" class="form-control" name="identificador" id="identificador" autofocus value="<?php echo $registro[0] ?>" aria-describedby="helpId" />
                                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $registro[1] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"><?php echo $registro[2] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio" id="precio" value="<?php echo $registro[3] ?>" />
                            </div>
                            <label for="" class="form-label">Imagen anterior</label>
                            <div class="mb-3">
                                <?php echo "<img width='100px' height='100px' src='img/" . $registro[4] . "'>"; ?>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Imagen Nueva</label>
                                <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*"></input>
                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Actualizar Producto">
                            </div>
                        </form>
                    </div>
                </div>
                <a href="index.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

<?php

include "footer.php";

?>