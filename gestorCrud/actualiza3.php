<?php include "conexion.php"; ?>

<?php

$idm = $_GET["idmodifica"];
$nombreAntiguo = $_GET["nombreimagen"];

mysqli_select_db($conexion, "productosbd");

// var_dump($_POST);

$identificador = $_POST["identificador"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

// var_dump($_FILES['imagen']);

$directorioSubida = "img/";
$max_file_size = "5120000";
$extensionesValidas = array("jpg", "png", "gif");

if (isset($_FILES['imagen'])) {
    $errores = 0;
    $nombreArchivo = $_FILES['imagen']['name'];
    $filesize = $_FILES['imagen']['size'];
    $directorioTemp = $_FILES['imagen']['tmp_name'];
    $tipoArchivo = $_FILES['imagen']['type'];
    $arrayArchivo = pathinfo($nombreArchivo);
    // var_dump($arrayArchivo);
    $extension = $arrayArchivo['extension'];

    if (!in_array($extension, $extensionesValidas)) {
        echo "La Extencion no es valida";
        $errores = 1;
    }

    if ($filesize > $max_file_size) {
        echo "La imagen debe de tener un tamaño inferior a 4Mb";
        $errores = 1;
    }

    if ($errores == 0) {
        $nombreCompleto = $directorioSubida . $nombreArchivo;
        move_uploaded_file($directorioTemp, $nombreCompleto);
    }
}

if ($_FILES['imagen']['name'] != "") {
    $sentencia = "UPDATE productos SET id_producto = $identificador, nombre= '$nombre', descripcion= '$descripcion', precio= $precio, fotografia= '$nombreArchivo' WHERE id_producto='$idm' ";
} else {
    $sentencia = "UPDATE productos SET id_producto = $identificador, nombre= '$nombre', descripcion= '$descripcion', precio= $precio, fotografia= '$nombreAntiguo' WHERE id_producto='$idm' ";
}

mysqli_query($conexion, $sentencia);

header("Location: actualiza_ok.php");

?>