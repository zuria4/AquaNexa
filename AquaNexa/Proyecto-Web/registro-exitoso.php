<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$usuario=$_POST["usuario"];
$clave=$_POST["password"];
$correo=$_POST["correo"];
/////////////
include("conex.php");
/////////////
$in="INSERT INTO usuarios (nombre, apellido, email, usuario, contraseña)VALUES('$nombre', '$apellido', '$correo', '$usuario', '$clave')";
$conex->query($in);
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
        <?php
        
        ?>
            <h1>Gracias por registrate</h1>
            

            <div class="register-link">
                <p><a href="login.php">Inicia Sesión</a></p>
            </div>
        </form>
    </div>
    </body>
</html>