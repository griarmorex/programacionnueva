<!DOCTYPE html>
<html lang="es">
	<head>
	</head>
	<body>	
		<?php
			/***************
				VARIABLES
			***************/
			//ASIGNAR VALORES A VARIABLES
				$nombre="Juan";
			//Las variables en php inician con el simbolo $
				echo "<p>Hola ".$nombre. "</p>";
				echo "<p>Hola $nombre </p>"; //el contenido entre "" se interpreta
				echo '<p>Hola $nombre </p>'; //el contenido entre '' solo se muestra
				unset ($nombre);
				echo "<p>Hola ".$nombre. "</p>";
				echo "<p>Hola $nombre </p>"; //el contenido entre "" se interpreta
				echo '<p>Hola $nombre </p>'; //el contenido entre '' solo se muestra

				$nombre="Felipe";
				echo "<p>Hola $nombre</p>";
				$nombre=null; //NULL es un valor especial nulo
				echo "<p>Hola $nombre</p>";
				$nombre="Juan";
				var_dump($nombre);
				$edad = 18;
				var_dump($edad);
				$edad = "18";
				var_dump($edad);
				var_dump(null);

				/*******************\
				 TIPOS DE VARIABLES
				\*******************/
				//BOOLEANO
				$esEstudiante=true;
				$esValor=false;
				//ENTERO
				$edad=20;
				//Punto Flotante
				$valor_pi=3.1416;
				//Cadena de Texto
				$nombre="Jose Carlos";
				//nulo
				$semestre=null;
		?>
	</body>
</html>