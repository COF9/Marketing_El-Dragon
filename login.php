<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOGIN EL DRAGON</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/z.png">
    <link rel="stylesheet" type="text/css" href="ccc.css">
</head>
<body><br><br><center><div id="a">
<div class="titulo">
    <h1>EL DRAGON</h1>
</div><table><tr><td><div id="b">
    <form method="POST" action="">
        <label><p><b><i>Nombre de usuario: </i></b></label><input type="text" name="userlogin"></p><br/><br/>
        <label><p><b><i>Cuenta de tarjeta: </i></b></label><input type="text" name="cue"></p><br/><br/>
        <label><p><b><i>Contrasena: </i></b></label><input type="password" name="pwlogin"></p></div></td></tr><tr><td><br/><br/>
        <input type="submit" name="iniciarsesion" id="boton" value="Iniciar Sesion">
    </form>
    <?php

session_start();    
include("congif.php");

if(isset($_POST['iniciarsesion']))
{
    if(isset($_POST['userlogin']) && !empty($_POST['userlogin']) &&
       isset($_POST['pwlogin']) && !empty($_POST['pwlogin']))
    {

            $sqldos = "SELECT nombreusuario,cue,contrasena FROM usuarios WHERE nombreusuario='$_POST[userlogin]' or cue='$_POST[cue]'";
            $recdos = mysqli_query($conexion,$sqldos);

            $sesion = mysqli_fetch_array($recdos);

            if(password_verify($_POST['pwlogin'], $sesion['contrasena']))
            {
                $_SESSION['username'] = $_POST['userlogin'];
                header("location: principal.html");
            }else{
                echo "<br/>";
                echo "<p><i><b>Conbinacion erronea.</b></i></p>";
            }

    }else{
        echo "<br/>";
        echo "<p><i><b>Debes llenar los campos.</b></i></p>";
    }
}

?><br><br/></td><td>
<a href="index.php">
    <input type="button" id="boton" value="Registro">
</a>
</center></div></body>
</html>