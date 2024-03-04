<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilos.css">
<title></title>
</head>

<body>
	<h1>Creación de cookie</h1>
	<?php
	
	if(!isset($_COOKIE['created_cookie'])){
		$expiration= time() + (60*60*24*365);
		setcookie('created_cookie', 1, $expiration);
        print("Cookie creada satisfactoriamente.");
	} else {
        print("La cookie ya fue creada .");
	}
	
	?>
		</br><a href="index.php">Volver al menú</a>
</body>
</html>