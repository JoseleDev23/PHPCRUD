<?php
// Verifica si se ha hecho clic en el botón de aceptar cookies
if (isset($_POST['aceptarCookies'])) {
    // Verifica si la cookie ya está creada
    if (!isset($_COOKIE['created_cookie'])) {
        // Crea la cookie
        $expiration = time() + (60 * 60 * 24 * 365);
        setcookie('created_cookie', 1, $expiration);
    }

    // Redirige al usuario al index.php
    header('Location: index.php');
    exit();
}
