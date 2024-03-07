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
                    Gestión de libros
                </div>
                <div class="p-4">
                    <div class="table-responsive">
                        <table class="table" style="text-align:center">
                            <thead>
                                <tr>
                                    <th scope="col">Añadir libro</th>
                                    <th scope="col">Eliminar libro</th>
                                    <th scope="col">Actualizar libro</th>
                                    <th scope="col">Listado de libros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">
                                        <a href="alta.php">
                                            <img src="../img/annadir.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="baja.php">
                                            <img src="../img/eliminar.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="actualiza.php">
                                            <img src="../img/actualizar.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="listado.php">
                                            <img src="../img/listado.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="menuPrincipalAdmin.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black"></i></a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "footer.php";

?>