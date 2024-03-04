<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cerrar sesión</title>
</head>

<body>

    <h1>Cerrar sesión</h1>
    <?php
    session_start();
    /*En teoría no es necesario iniciar la variable a null*/
    $nombreSesion = null;
    if (isset($_SESSION['iniciada']) == true) {
        $nameSession = $_SESSION['nombre'];
        session_unset();
        session_destroy();
        print("Sesión de " . $nameSession . " eliminada con éxito.");
    } else {
        print("No se ha iniciado sesión.");
    }
    ?>
    <a href="index.php"><br>Volver al menú</a>
</body>

</html>