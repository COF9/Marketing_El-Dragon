<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
	<title>comprar</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/z.png">
  	<link rel="stylesheet" type="text/css" href="bbb.css">
</head>
<body>
<style>
	#boton{
		color: black;
  		background: -webkit-linear-gradient( #000000 10%, #FFFFFF 90%);
		width: 250px;
		height:100px;
		font-size: 20px
	}
	#r{
		color: #0FF;
		font-weight: bold;
		font-size: 32px;
	}
</style>
<?php
	if (isset($_POST["button"])){
	$numero1=$_POST["num1"];
	$numero2=50;
	$pago=$_POST["pago"];
	calcular ($pago);
	}

	function calcular ($calculo){
		if (!strcmp("master card", $calculo)) {
			global $numero1;
			global $numero2;

			$resultado=$numero1*$numero2;
			echo "<p id='r'>La cantidad a retirar de tu targeta master card es de:  $resultado</p>";
		}
		if (!strcmp("visa", $calculo)) {
			global $numero1;
			global $numero2;

			$resultado=$numero1*$numero2;
			echo "<p id='r'>La cantidad a retirar de tu targeta visa es de:  $resultado</p>";
		}
		if (!strcmp("paypal", $calculo)) {
			global $numero1;
			global $numero2;

			$resultado=$numero1*$numero2;
			echo "<p id='r'>La cantidad a retirar de tu targeta paypal es de:  $resultado</p>";
		}
	}
	?>
	<h3>Gracias por tu compra</h3>
	<p>Espera y oprime el boton para tu descarga</p>
	<a href="juegos100.rar">
	<input type="button" id="boton" value="Espere 60" disabled>
<script type="text/javascript">
window.onload = function(){
var intervalo;
var boton = document.getElementById('boton');
var segundos = 60;
var cuenta = function(){
if(segundos > 0) {
segundos--;
boton.value = 'Espere '+ segundos;
intervalo = setInterval(cuenta, 1000);
} else {
clearInterval(intervalo);
boton.value = 'Descargar';
boton.disabled = false;
}
}
cuenta();
}
</script></a>
	<hr>
<a href="index.html">seguir navegando</a>
<hr>
<footer id="pie">
	Derechos Reservados &copy; EL DRAGON
</footer>
</body>
</html>
</html>