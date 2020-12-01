<?php

    $host = "127.0.0.1";
    $hostuser = "root";
    $hostpw = "";
    $hostdb = "registro";

    $conexion = mysqli_connect($host,$hostuser,$hostpw,$hostdb);

    if($conexion)
    {
    	return "CONECTADO";
    }else{
    	return "NO CONECTADO";
    }

?>