<?php include "../../conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];
$dni = $_POST["dni"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$rol = $_POST["rol"];

$update_query = "UPDATE usuarios SET nombre = '$nombre', correo_electronico = '$correo', contrasena = '$pass', dni = '$dni', edad = '$edad', direccion = '$direccion', rol = '$rol' WHERE id = '$id'";

if (mysqli_query($conexion, $update_query)) {
    header("Location: actualizarUsuario_ok.php");
    exit();
} else {
    echo "Error al actualizar los datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>