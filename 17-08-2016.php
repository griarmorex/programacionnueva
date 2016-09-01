<html>
	<head>
	</head>
	<body>	
		<?php
			$esEstudiante=false;
			$edad=18;
			$valor_pi=3.1416;
			$nombre="Jose Carlos";
			$semestre=null;

			echo '<p> El tipo de $esEstudiante es:'.gettype($esEstudiante).'</p>';
			echo "<p style='color:blue'>El tipo de $esEstudiante es:".gettype($esEstudiante)."</p>";

			echo '<p> El tipo de $edad es:'.gettype($edad).'</p>';
			echo "<p style='color:blue'>El tipo de $edad es:".gettype($edad)."</p>";

			echo '<p> El tipo de $valor_pi es:'.gettype($valor_pi).'</p>';
			echo "<p style='color:blue'>El tipo de $valor_pi es:".gettype($valor_pi)."</p>";
			
			echo '<p> El tipo de $nombre es:'.gettype($nombre).'</p>';
			echo "<p style='color:blue'>El tipo de $nombre es:".gettype($nombre)."</p>";

			echo '<p> El tipo de $semestre es:'.gettype($semestre).'</p>';
			echo "<p style='color:blue'>El tipo de $semestre es:".gettype($semestre)."</p>";

			unset($edad);
			echo '<p>El tipo de $edad es:'.gettype($edad).'<p/>';

			/*** Operador Ternario ***/
			echo ($esEstudiante? "Hola Estudiante":"Quien eres");
			echo "<br>";
			echo (3>4? "Incorrecto":"Correcto");

			/* Constantes */
			// Una constate en php se define usando la funcion define()

				define("MI_NUMERO_TELEFONICO", 999999999);
				echo "<p>Mi número telefonico es: ",MI_NUMERO_TELEFONICO,"</P>";
				echo "<p>Mi número telefonico es: ".MI_NUMERO_TELEFONICO."</P>";

				define("MI_NUMERO_TELEFONICO", 888888888);
				echo "<p>Mi número telefonico es: ",MI_NUMERO_TELEFONICO,"</P>";
			/* Constantes Pre Definidas */

				echo __FILE__,"<br>";
				echo __DIR__,"<br>";
		?>
	</body>	
</html>