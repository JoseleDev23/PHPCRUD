<?php include "../../conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$pass = $_POST["password"];
$dni = $_POST["dni"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$rol = $_POST["rol"];

$insertar = "INSERT INTO usuarios (nombre, correo_electronico, contrasena, dni, edad, direccion, rol) VALUES ('$nombre','$correo','$pass','$dni','$edad','$direccion','$rol')";
if (mysqli_query($conexion, $insertar)) {
    header("Location: alta_ok.php");
    exit();
} else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>