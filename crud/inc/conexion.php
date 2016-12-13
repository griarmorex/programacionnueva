<?php 
	 $conexion=new mysqli("localhost","root","root",'programacionweb');
	 if ($conexion->connect_errno){
	 	echo "Error al conectar ala BB DD:".
	 		$conexion->connect_errno.",".
	 		$conexion->connect_error;
	 	exit();
	 }else{
	 	$conexion->set_charset("utf8");
	 }
	 ?>
