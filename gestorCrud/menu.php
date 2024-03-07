<?php
include "conexion.php";
// Recuperamos la información de la sesión
if (!isset($_SESSION)) {
    session_start();
}

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='index.php'>identificarse</a>.<br />");
}
?>
<?php
include "header.php";
?>
<!-- <div class="container-fluid">
    <div class="row">
        <div class="col text-start text-secondary">
            Usuario:  echo $_SESSION['usuario'];
        </div>
        <div class="col text-end">
            <form action="logout.php" method="post">
                <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</div> -->
<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Acciones sobre BD
                </div>
                <div class="p-4">
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Alta de producto</th>
                                    <th scope="col">Baja de producto</th>
                                    <th scope="col">Actualizacion de producto</th>
                                    <th scope="col">Listado de producto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row"><a href="alta.php"><i class="bi-database-add px-3" style="font-size: 4rem; color: orange;"></i></a></td>
                                    <td scope="row"><a href="baja.php"><i class="bi-database-dash px-3" style="font-size: 4rem; color: orange;"></i></a></td>
                                    <td scope="row"><a href="actualiza.php"><i class="bi-database-check px-3" style="font-size: 4rem; color: orange;"></i></a></td>
                                    <td scope="row"><a href="listado.php"><i class="bi-database-down px-3" style="font-size: 4rem; color: orange;"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "footer.php";

?>