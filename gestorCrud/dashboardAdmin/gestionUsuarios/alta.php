<?php

include "header.php";

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Añadir usuario
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Ingresar datos
                        </div>
                        <form role="form" action='registrar.php' method='post'>
                            <div class="form-group">
                                <legend>Registro de Usuario</legend>
                                <label for="nombre">
                                    Nombre:
                                </label>
                                <input type='text' name='nombre' id='nombre' required />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Correo Electrónico:
                                </label>
                                <input type='email' name='email' id='email' required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Contraseña:
                                </label>
                                <input type='password' name='password' id='password' required />
                            </div>
                            <div class="form-group">
                                <label for="dni">
                                    DNI:
                                </label>
                                <input type='text' name='dni' id='dni'  required />
                            </div>
                            <div class="form-group">
                                <label for="edad">
                                    Edad:
                                </label>
                                <input type='number' name='edad' id='edad' required />
                            </div>
                            <div class="form-group">
                                <label for="direccion">
                                    Dirección:
                                </label>
                                <input type='text' name='direccion' id='direccion' />
                            </div>
                            <div class="form-group">
                                <label for="rol">Rol:</label>
                                <select name="rol" id="rol" required>
                                    <option value="usuario">Usuario</option>
                                    <option value="administrador">Administrador</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Añadir
                            </button>
                        </form>
                    </div>
                </div>
                <a href="menuGestionUser.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

<?php

include "footer.php";

?>