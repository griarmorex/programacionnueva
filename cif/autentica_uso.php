<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

	if (!isset($_SESSION)) session_start(); 
		if(isset($_SESSION['autenticado']) AND $_SESSION['autenticado']){
			echo "<h1>Bienvenidos</h1>";
		}else{
			echo "<p>Error de Acceso</p>";
			}
 ?>
</body>
</html>