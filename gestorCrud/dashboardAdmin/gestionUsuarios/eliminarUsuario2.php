<?php

include "../../conexion.php";
include "header.php";

mysqli_select_db($conexion, "bibliotecaphp");

$usuarioBorrar = $_GET["id"];
$borrar = "DELETE FROM usuarios WHERE id = '$usuarioBorrar'";
mysqli_query($conexion, $borrar);
header("Location: eliminar_ok.php");
