<html>
	<head>
	</head>
	<body>
		<?php
			$conexion=new mysqli("localhost","root","root",'programacionweb');
			if($conexion->connect_errno){
				echo "Error al conectar a la BB DD:".
					$conexion->connect_errno.",".
					$conexion->connect_errno;
				exit();	
			}else{
				$conexion->set_charset("utf8");
			}
		?>
	</body>
</html>
