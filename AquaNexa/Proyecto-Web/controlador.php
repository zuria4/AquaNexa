<?php

if (isset($_POST["btningresar"])) { 
        if (empty($_POST["usuario"]) and empty($_POST["password"])) {
            echo '<div>LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            include("conex.php");
            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql="SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$clave'";
            $res = mysqli_query($conex, $sql);

            if (mysqli_num_rows($res)>0) {
                header("location:inicio.php");
            } else {
                echo '<div id="acceso">ACCESO DENEGADO</div>';
            }
        }
}
?>
