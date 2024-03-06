<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acpetar Cookies</title>
</head>

<body>
	<?php

	include "gestorCrud/header.php";

	?>
	<h1>Creación de cookies</h1>
	<?php

	if (!isset($_COOKIE['created_cookie'])) {
		$expiration = time() + (60 * 60 * 24 * 365);
		setcookie('gustosLectura', 1, $expiration);
		print("Cookie creada satisfactoriamente.");
	} else {
		print("La cookie ya fue creada .");
	}

	?>
	</br><a href="gestorCrud/index.php">Iniciar sesión</a>
	<?php

	include "gestorCrud/footer.php";

	?>
</body>

</html>