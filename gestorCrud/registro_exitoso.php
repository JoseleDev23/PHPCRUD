<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html {
            background-color: #e2e2e2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 30%;
            border-collapse: collapse;
            border-radius: 10px;
            box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin: auto;
            padding: 20px;
            margin-top: 25px;
            margin-bottom: 25px;
            text-align: center;
        }

        .btn-login {
            display: block;
            width: 50%;
            margin: 0 auto;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>