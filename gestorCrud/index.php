<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentificacion de usuarios</title>
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
                        <form role="form" method='post' action='login.php'>
                            <div class="form-group">
                                <legend>Login</legend>
                                <div>
                                    <span class='error'>
                                        <?php
                                        if (isset($error)) {
                                            echo $error;
                                        }
                                        ?>
                                    </span>
                                </div>
                                <label for="usuario">Usuario:</label>
                                <input type='text' name='inputUsuario' id='usuario' maxlength="50" />
                            </div>
                            <div class="form-group">
                                <label for="password"> Contraseña: </label>
                                <input type='password' name='inputPassword' id='password' maxlength="50" />
                            </div>
                            <button type="submit" name="enviar" class="btn btn-primary">Entrar</button>
                            <button type="button" onclick="window.location.href='formulario_registro.php'" class="btn btn-primary">
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