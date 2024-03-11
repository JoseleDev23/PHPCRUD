<?php

include "header.php";

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Gestión de la biblioteca
                </div>
                <div class="p-4">
                    <div class="table-responsive">
                        <table class="table" style="text-align:center">
                            <thead>
                                <tr>
                                    <th scope="col">Gestionar libros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">
                                        <a href="menuUsuario.php">
                                            <img src="../../img/listado.png" width="100px" height="100px">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-end">
                        <form action="../logout.php" method="post">
                            <button type="submit" class="btn btn-sm btn-danger">Cerrar Sesión</button>
                        </form>
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