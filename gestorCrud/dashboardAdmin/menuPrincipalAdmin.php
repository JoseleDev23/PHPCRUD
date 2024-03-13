<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='../index.php'>identificarse</a>.");
}

include "header.php";

?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card shadow">
                <div class="card-header display-6">
                    Gestión de la biblioteca
                </div>
                <div class="p-4">
                    <div class="table-responsive">
                        <table class="table" style="text-align:center">
                            <thead>
                                <tr>
                                    <th scope="col">Gestionar usuarios</th>
                                    <th scope="col">Gestionar libros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">
                                        <a href="gestionUsuarios/menuGestionUser.php">
                                            <img src="../../img/user.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="gestionLibros/menu.php">
                                            <img src="../../img/listado.png" width="100px" height="100px">
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
</div>

<?php

include "footer.php";

?>