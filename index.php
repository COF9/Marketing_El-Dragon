<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO EL DRAGON</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/z.png">
    <link rel="stylesheet" type="text/css" href="ccc.css">
</head>
<body><br><br><center><div id="a">
<div class="titulo">
    <h1>EL DRAGON</h1>
</div><table><tr><td><div id="b">
    <form method="POST" action="";>
        <label><p><b><i>Correo: </i></b></label><input type="text" name="userreg"></p><br/><br/>
        <label><p><b><i>Cuenta de tarjeta: </i></b></label><input type="text" name="cue"></p><br/><br/></div></td><td><div id="c">
        <label><p><b><i>Contrasena: </i></b></label><input type="password" name="pwreg"></p><br/><br/>
        <label><p><b><i>Repite la contrasena: </i></b></label><input type="password" name="pwregveri"></p></div></td></tr><tr><td><br/><br/>
        <input type="submit" name="registrar" id="boton" value="Registrarme">
    </form>
    <br/><br/></td><td>
    <a href="login.php">¡INICIAR SESION!</a>
    <?php

        include("congif.php");

        if(isset($_POST['registrar']))
        {
            if($_POST['userreg'] == '' or $_POST['pwreg'] == '')
    {
        echo "<p><i><b>Debe llenar todos los campos por favor.</b></i></p>";
    }else{
        
             $sql = 'SELECT * FROM usuarios';
             $rec = mysqli_query($conexion,$sql);
             $verificar = 0;
        
             while($resultado = mysqli_fetch_object($rec))
             {
                 if($resultado->nombreusuario == $_POST['userreg'])
                 {
                     $verificar = 1;
                 }
             }
             if($verificar == 0)
             {
                if($_POST['pwreg'] == $_POST['pwregveri'])
                {
                         $nom = $_POST['userreg'];
                         $cue = $_POST['cue'];
                         $pw = $_POST['pwreg'];
                         $pw_en = password_hash($pw, PASSWORD_DEFAULT);
            
                         $conexion->query("INSERT INTO usuarios (nombreusuario,cue,contrasena) VALUES ('$nom','$cue','$pw_en')");
                         mysqli_query($conexion,$sql);
                 
                 
                         echo "<p><i><b>Te has registrado con exito.</b></i></p>";  
                }else{
                    echo "<p><i><b>Las contrasenas no coinciden.</b></i></p>";
                }
             }else{
                  echo "<p><i><b>El nombre de usuario ya esta en nuestra base de datos, por favor prueba otro.</b></i></p>";
              }
        }
        }
    ?></td></tr></table></center></div>
</body>
</html>