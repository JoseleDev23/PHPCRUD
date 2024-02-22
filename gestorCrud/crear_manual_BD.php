<?php

//Datos de conexión a MySQL
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexión");

if (!$conexion) {
    echo 'Conexión fallida<br>';
}

//Crear BD sino existe
else {

    $sql1 = "CREATE DATABASE productosbd";
    if (mysqli_query($conexion, $sql1)) {
        echo "BD Creada ";
        //Seleccionamos la Base de Datos
        mysqli_select_db($conexion, "productosbd");
        $sql2 = "CREATE TABLE productos (id_producto INT(11) NOT NULL , nombre VARCHAR(20) , descripcion VARCHAR(255) , precio INT(11) , fotografia BLOB , PRIMARY KEY (id_producto))";

        if (mysqli_query($conexion, $sql2)) {
            echo "Tabla Creada";
        } else {
            echo "Error al crear la tabla";
        }
    } else {
        echo "Error al crear la BD";
    }
}
