<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aceptar Cookies</title>
	<!-- Agrega el enlace al archivo de estilos de Bootstrap -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<?php include "../gestorCrud/header.php"; ?>

	<div class="container">
		<h2>Creación de cookies</h2>

		<p>Debes aceptar las cookies para poder continuar ingresando al sistema.</p>

		<?php
		if (!isset($_COOKIE['created_cookie'])) {
			echo '<form action="aceptarCookies.php" method="post">';
			echo '<input type="submit" class="btn btn-primary" name="aceptarCookies" value="Aceptar Cookies">';
			echo '</form>';
		} else {
			echo "<p>La cookie ya fue creada.</p>";
			echo '<form action="../gestorCrud/index.php" method="post">';
			echo '<input type="submit" class="btn btn-primary" name="continuarConElMenu" value="Cookies Creadas">';
			echo '</form>';
		}
		// if (isset($_COOKIE['created_cookie'])) {
		// 	setcookie("created_cookie", "1", time() - 1);
		// 	print("Cookie eliminada.");
		// } else {
		// 	print("No existía cookie con anterioridad.");
		// }
		?>
	</div>

	<?php include "../gestorCrud/footer.php"; ?>

	<!-- Agrega el enlace al archivo de scripts de Bootstrap y jQuery al final del cuerpo del documento -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>