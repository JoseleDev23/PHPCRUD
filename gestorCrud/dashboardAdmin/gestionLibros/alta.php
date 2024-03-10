<?php

include "header.php";

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Añadir libro
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Ingresar datos
                        </div>
                        <form class="p-4" method="POST" action="registrar.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Título</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" required />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Autor</label>
                                <input type="text" class="form-control" name="autor" id="autor" required />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Género</label>
                                <input type="text" class="form-control" name="genero" id="genero" required />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Año de publicación</label>
                                <input type="number" class="form-control" name="anno" id="anno" required />
                            </div>
                            <input type="hidden" name="disponibilidad" id="disponibilidad" value="disponible">
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Añadir">
                            </div>
                        </form>
                    </div>
                </div>
                <a href="menu.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

<?php

include "footer.php";

?>