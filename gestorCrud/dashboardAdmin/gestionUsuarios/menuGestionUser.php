<?php

include "header.php";

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card shadow">
                <div class="card-header display-6">
                    Gestión de usuarios
                </div>
                <div class="p-4">
                    <div class="table-responsive">
                        <table class="table" style="text-align:center">
                            <thead>
                                <tr>
                                    <th scope="col">Añadir usuario</th>
                                    <th scope="col">Eliminar usuario</th>
                                    <th scope="col">Actualizar usuario</th>
                                    <th scope="col">Listado de usuarios</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">
                                        <a href="alta.php">
                                            <img src="../../../img/userAdd.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="eliminarUsuario.php">
                                            <img src="../../../img/userDel.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="actualizarUsuario.php">
                                            <img src="../../../img/userUpdate.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                    <td scope="row">
                                        <a href="listadoUsuarios.php">
                                            <img src="../../../img/userList.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <button type="button" onclick="window.location.href='../menuPrincipalAdmin.php'" class="btn btn-secondary mt-3">
                                Volver atrás
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "footer.php";

?>