<?php

//Datos de conexión a MySQL
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexión");

if (!$conexion) {
    echo 'Conexión fallida<br>';
}
