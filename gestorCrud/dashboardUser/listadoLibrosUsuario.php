<?php
include "../conexion.php";
include "header.php";
?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Listado de libros
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            Libros
                        </div>

                        <?php
                        mysqli_select_db($conexion, "bibliotecaphp");
                        $consultar = "SELECT * FROM libros WHERE disponibilidad='Disponible'";
                        $registros = mysqli_query($conexion, $consultar);
                        ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Identificador</th>
                                        <th scope="col">Título</th>
                                        <th scope="col">Autor</th>
                                        <th scope="col">Género</th>
                                        <th scope="col">Año de publicación</th>
                                        <th scope="col">Disponibilidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($registro = mysqli_fetch_row($registros)) {
                                    ?>
                                        <tr class="align">
                                            <td scope="row"><?php echo $registro[0]; ?></td>
                                            <td><?php echo $registro[1]; ?></td>
                                            <td><?php echo $registro[2]; ?></td>
                                            <td><?php echo $registro[3]; ?></td>
                                            <td><?php echo $registro[4]; ?></td>
                                            <td><?php echo $registro[5]; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <a href="menuUsuario.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include "footer.php";
?>