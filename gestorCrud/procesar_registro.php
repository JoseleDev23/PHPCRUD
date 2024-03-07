<?php
include "conexion.php";

// Selecciona la base de datos
mysqli_select_db($conexion, "bibliotecaphp");

// Recoge los datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];
$dni = $_POST["dni"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$rol = $_POST["rol"];

// // Hash de la contraseña (puedes mejorar esto según tus necesidades)
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Inserta los datos en la tabla de usuarios
$insertar = "INSERT INTO usuarios (nombre, correo_electronico, contrasena, dni, edad, direccion, rol) 
             VALUES ('$nombre', '$email', '$password', '$dni', $edad, '$direccion', '$rol')";

mysqli_query($conexion, $insertar);

header("Location: registro_exitoso.php");
exit();
