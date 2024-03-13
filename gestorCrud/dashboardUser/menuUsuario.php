<?php
include "../conexion.php";

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='../index.php'>identificarse</a>.");
}
?>

<?php
include "header.php";
?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card shadow">
                <div class="card-header display-6">
                    <p class="text-secondary fs-9 pt-2">¡Le damos la bienvenida, <?php echo $_SESSION['usuario']; ?>!</p>
                </div>
                <div class="p-4">
                    <div class="table-responsive">
                        <table class="table" style="text-align:center">
                            <thead>
                                <tr>
                                    <th scope="col">Pedir préstamo</th>
                                    <th scope="col">Listado de libros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">
                                        <a href="prestamo.php">
                                            <img src="../../img/actualizar.png" alt="Actualizar libro" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="listadoLibrosUsuario.php">
                                            <img src="../../img/listado.png" alt="Listado de libros" width="100px" height="100px">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" onclick="window.location.href='../logout.php'" class="btn btn-danger">
                            Cerrar sesión
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>