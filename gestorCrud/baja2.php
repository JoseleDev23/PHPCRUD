<?php

include "conexion.php";
include "header.php";

mysqli_select_db($conexion, "bibliotecaphp");

$productoBorrar = $_GET["id"];
$borrar = "DELETE FROM libros WHERE id = '$productoBorrar'";
mysqli_query($conexion, $borrar);
header("Location: baja_ok.php");
