<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <style>
        html {
            background-color: #e2e2e2;
        }

        .container {
            max-width: 30%;
            border-collapse: collapse;
            border-radius: 10px;
            box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin: auto;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-top: 25px;
            margin-bottom: 25px;
            text-align: center;
        }

        h2 {
            color: green;
        }

        .btn-login {
            margin: 1em;
        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <div class="container">
        <h2>Registro Exitoso</h2>
        <p>Tu cuenta ha sido creada con éxito.</p>
        <a href="index.php" class="btn btn-primary btn-login">Iniciar sesión</a>
    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>