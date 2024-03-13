<?php include "../conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

// var_dump($_POST);
$id = $_POST["id"];
$disponibilidad = $_POST["disponibilidad"];

$insertar = "UPDATE libros SET disponibilidad = '$disponibilidad' WHERE id = '$id'";
mysqli_query($conexion, $insertar);

header("Location: actualizaLibro_ok.php");
