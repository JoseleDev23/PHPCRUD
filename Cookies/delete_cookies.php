<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Borrar cookies</title>
</head>

<body>
    <h1>Borrar cookies</h1>
    <?php
    var_dump($_COOKIE);
    if (isset($_COOKIE['created_cookie'])) {
        setcookie("created_cookie", "1", time() - 1);
        print("Cookie eliminada.");
    } else {
        print("No existía cookie con anterioridad.");
    }
    ?>
    <br><a href="show_cookies.php">Revisar cambios</a>
    <br><a href="index.php"><br>Volver al menú</a>
</body>

</html>