<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Principal</title>
</head>

<body>

    <h1>Menú principal</h1>
    <?php

    $option =  $_GET["option"];

    switch ($_GET["option"]) {
        case 1:
            include "start_sesion.php";
            break;
        case 2:
            include "show_cookies.php";
            break;
        case 3:
            include "delete_cookies.php";
            break;
        case 4:
            include "close_sesion.php";
            break;
        default:
            print("Valor no válido");
    }

    ?>
</body>

</html>