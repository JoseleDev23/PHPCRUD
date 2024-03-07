<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentificacion de usuarios</title>
    <style>
        html {
            background-color: #e2e2e2;
        }

        form {
            max-width: 20%;
            border-collapse: collapse;
            border-radius: 10px;
            box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin: auto;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-top: 25px;
            margin-bottom: 25px;
            text-align: center;
        }

        form label {
            display: block;
            width: 80%;
            margin: 0.2rem auto;
        }

        form button {
            margin: .5em 2em;
        }
    </style>
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
                        <form role="form" action='login.php' method='post'>
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
                                <label for="usuario">
                                    Usuario:
                                </label>
                                <input type='text' name='inputUsuario' id='usuario' maxlength="50" />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Contraseña:
                                </label>
                                <input type='password' name='inputPassword' id='password' maxlength="50" />
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Entrar
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