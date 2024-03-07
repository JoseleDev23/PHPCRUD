<?php include "conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

// var_dump($_POST);
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$genero = $_POST["genero"];
$anno = $_POST["anno"];
$disponibilidad = $_POST["disponibilidad"];


$insertar = "UPDATE libros SET titulo = '$titulo', autor = '$autor', genero = '$genero', anio_publicacion = '$anno', disponibilidad = '$disponibilidad' WHERE id = '$id'";
mysqli_query($conexion, $insertar);

header("Location: actualiza_ok.php")

?>