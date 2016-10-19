<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	if(!isset($_SESSION))
	session_start();
	$_SESSION['nombre']="Jaimito";//variable de sesiones $_SESSION
	echo "<p>Desde sesiones_origen.php</p>";
	echo "<p>Hola ".$_SESSION['nombre']."</p>";
	echo "<a href='sesiones_destino.php'>Ir a sesiones_destino.php</a>";
?>
</body>
</html>