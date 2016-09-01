<!DOCTYPE html>
<html lang="es">
	<head>
	</head>
	<body>
		<?php
			echo $_POST['textNombre'];
			echo "<br>";
			echo $_POST['submitHola'];
			var_dump($_POST);
			echo "<br>";
			echo "<pre>";print_r($_POST);echo"</pre>";
		?>
	</body>
</html>