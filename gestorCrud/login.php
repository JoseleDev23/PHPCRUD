<?php
session_start();

include "conexion.php";

if (isset($_POST['inputUsuario'])) {
    $usuario = $_POST['inputUsuario'];
    $password = $_POST['inputPassword'];

    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir un usuario y contraseña";
    } else {
        mysqli_select_db($conexion, "bibliotecaphp");
        $query = "SELECT nombre, contrasena, rol FROM usuarios WHERE nombre = '$usuario' AND contrasena = '$password'";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $usuarioData = mysqli_fetch_assoc($result);
                $_SESSION['usuario'] = $usuario;
                if ($usuarioData['rol'] == 'admin') {
                    header("Location: menuPrincipalAdmin.php");
                } else {
                    header("Location: menuPrincipalUser.php");
                }
                exit();
            } else {
                $error = "Usuario o contraseña no válidos!";
            }
        } else {
            $error = "Error en la consulta: " . mysqli_error($conexion);
        }
    }
}

include "index.php";