<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php

    session_start();

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "Laura";

    print("Nombre " . $_SESSION['nombre']);
    
    //Si no se ha definido la cookie aceptar, se crea el div que te pide que lo aceptes
    if (!isset($_COOKIE['created_cookie'])) :
    ?>

        <div>
            <h1>Debes aceptar las cookies para seguir navegando</h1>
            <a href="created_cookie.php">Aceptar</a>
        </div>
    <?php
    endif;

    var_dump($_COOKIE);

    ?>
    <a href="index.php"><br>Volver al menú</a>
</body>

</html>