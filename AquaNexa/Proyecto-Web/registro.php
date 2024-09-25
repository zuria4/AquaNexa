<?php
include("conex.php");
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style_login.css">
</head>

<body>

    <div class="wrapper">
        <form method="POST" action="registro-exitoso.php">
            <h1>Registrate</h1>
            <div class="input-box">
                <input type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="input-box">
                <input type="text" name="apellido" placeholder="Apellido" required>
            </div>
            <div class="input-box">
                <input type="text" name="correo" placeholder="Correo Electonico" required>
            </div>
            <div class="input-box">
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            

            <button type="submit" name="btningresar" class="btn" >Registrarse</button>

            <div class="register-link">
                <p>¿Ya tenes una cuenta? <a href="login.php">Inicia Sesión</a></p>
            </div>
        </form>
    </div>
    </body>
</html>