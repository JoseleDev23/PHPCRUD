<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 pt-3" style="background-color: #e2e2e2;">
                        <form role="form" action='procesar_registro.php' method='post'>
                            <div class="form-group">
                                <legend>Registro de Usuario</legend>
                                <label for="nombre">
                                    Nombre:
                                </label>
                                <input type='text' name='nombre' id='nombre' maxlength="100" required />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Correo Electrónico:
                                </label>
                                <input type='email' name='email' id='email' maxlength="100" required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Contraseña:
                                </label>
                                <input type='password' name='password' id='password' maxlength="100" required />
                            </div>
                            <div class="form-group">
                                <label for="dni">
                                    DNI:
                                </label>
                                <input type='text' name='dni' id='dni' maxlength="20" required />
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
                                <input type='text' name='direccion' id='direccion' maxlength="255" />
                            </div>
                            <div class="form-group">
                                <label for="rol">Rol:</label>
                                <select name="rol" id="rol" required>
                                    <option value="usuario">Usuario</option>
                                    <option value="admin">Administrador</option>
                                </select>
                            </div>
                            <button type="button" onclick="window.location.href='index.php'" class="btn btn-primary">
                                Volver atrás
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Registrarse
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>