<?php include "conexion.php";

mysqli_select_db($conexion, "bibliotecaphp");

// var_dump($_POST);

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$genero = $_POST["genero"];
$anno = $_POST["anno"];
$disponibilidad = $_POST["disponibilidad"];


$insertar = "INSERT INTO libros (titulo, autor, genero, anio_publicacion, disponibilidad) VALUES ('$titulo','$autor','$genero',$anno,'$disponibilidad')";
mysqli_query($conexion, $insertar);

header("Location: alta_ok.php")

?>