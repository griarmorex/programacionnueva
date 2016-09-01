<!DOCTYPE html>
<html lang="es">
	<head>
		<title>10-08-2016</title>
	</head>
	<body>
		<?php date_default_timezone_set('Europe/Paris');
			echo date("h_i:s");
		?>
		<?php
			echo "Hola";
		?>
		<?php
			date_default_timezone_set('America/Lima');
			$hora_lima = date ("h:i:s");
			
			date_default_timezone_set('Europe/Paris');
			$hora_paris = date ("h:i:s");
				echo "<p> La Hora en Lima es: ".$hora_lima."</p>";
				echo "<p> La Hora en Paris es: ".$hora_paris."</p>";
		?>
	</body>
</html>