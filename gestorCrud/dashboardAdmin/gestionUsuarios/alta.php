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
                <div class="card shadow">
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
                            <button type="button" onclick="window.location.href='menuGestionUser.php'" class="btn btn-secondary">
                                Volver atrás
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-fluid p-0">
    <footer class="text-center text-white" style="background-color: #663b2a">
        <div class="container p-4 pb-0">
            <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">¡Échale un ojo al GitHub!</span>
                <a class="nav-link" href="https://github.com/Yodel23/PHPCRUD" target="_blank">
                    <img src="../../../img/git.png" width="50px" height="50px" />
                </a>
            </p>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <strong> Juan Antonio Buenestado Gómez & Jose Antonio Muñoz Sarmiento</strong>
            © 2024 Todos los derechos reservados
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>