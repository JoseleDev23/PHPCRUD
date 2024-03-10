<?php
include "conexion.php";

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='index.php'>identificarse</a>.
");
}
?>

<?php
include "header.php";
?>

<div class="container">
    <div class="row mb-3">
        <div class="col-12 text-start pb-2">
            <p class="text-secondary fs-6">Usuario: <?php echo $_SESSION['usuario']; ?></p>
        </div>
    </div>
</div>


<div class="container my-5">
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
                                    <th scope="col">Actualizar libro</th>
                                    <th scope="col">Listado de libros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">
                                        <a href="actualiza.php">
                                            <img src="../img/actualizar.png" alt="Actualizar libro" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="listadoLibrosUsuario.php">
                                            <img src="../img/listado.png" alt="Listado de libros" width="100px" height="100px">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="menuPrincipalUser.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black"></i></a>
                    </div>
                    <div class="text-end">
                        <form action="logout.php" method="post">
                            <button type="submit" class="btn btn-sm btn-danger">Cerrar Sesión</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>