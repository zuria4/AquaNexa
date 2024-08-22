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
        <form method="POST">
            <h1>Iniciar Sesión</h1>
            <div  class="acceso" style="margin-left: 26%; color=red;"><?php
                include("controlador.php");
            ?>
            </div>
            <div class="input-box">
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Clave" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Recordarme</label>
                <a href="registro.php">Resgistrarte</a>
            </div>

            <button type="submit" name="btningresar" class="btn" >Login</button>

            <div class="register-link">
                <p>¿No querés iniciar sesion? pasá directamente a <a href="inicio.php">nuestra pagina</a></p>
            </div>
        </form>
    </div>
    </body>
</html>