<?php
include "conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];
$dni = $_POST["dni"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$rol = $_POST["rol"];

$insertar = "INSERT INTO usuarios (nombre, correo_electronico, contrasena, dni, edad, direccion, rol) 
             VALUES ('$nombre', '$email', '$password', '$dni', $edad, '$direccion', '$rol')";

mysqli_query($conexion, $insertar);

header("Location: registro_exitoso.php");
exit();
