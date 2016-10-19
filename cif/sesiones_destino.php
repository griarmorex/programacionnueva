<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	if(!isset($_SESSION))
	session_start();

	echo "<p>Desde sesiones_destino.php</p>";
	echo "<p>Hola ".$_SESSION['nombre']."</p>";//llama ala variable de sesion
	echo "<a href='sesiones_origen.php'>Volver a sesiones_origen.php</a>";
?>
</body>
</html>