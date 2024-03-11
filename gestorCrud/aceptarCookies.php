<?php
// Verifica si se ha hecho clic en el botón de aceptar cookies
if (isset($_POST['aceptarCookies'])) {
    // Verifica si la cookie ya está creada
    if (!isset($_COOKIE['created_cookie'])) {
        // Crea la cookie
        $expiration = time() + (60 * 60 * 24 * 365);
        setcookie('created_cookie', 1, $expiration);
    }

    // Procesar la distinción y redirigir al panel correspondiente
    session_start();
    include "conexion.php";

    $usuario = $_SESSION['usuario'];
    mysqli_select_db($conexion, "bibliotecaphp");
    $query = "SELECT rol FROM usuarios WHERE nombre = '$usuario'";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        $usuarioData = mysqli_fetch_assoc($result);
        $_SESSION['usuarioData'] = $usuarioData;

        if ($usuarioData['rol'] == 'admin') {
            header('Location: dashboardAdmin/menuPrincipalAdmin.php');
        } else {
            header('Location: dashboardUser/menuPrincipalUser.php');
        }
        exit();
    } else {
        $error = "Error en la consulta: " . mysqli_error($conexion);
    }
}
