<?php
	include('../crud/inc/conexion.php');

	$persona['paterno']="Flores";
	$persona['materno']="Apaza";
	$persona['nombres']="Jaime";
	$persona['personas_id']=8;
	$personas[]=$persona;
	$personas[]=$persona;

	$respuesta=array();
	if($conexion){
		$sql='SELECT p. * FROM personas p';
		$resultado=$conexion->query($sql);
		$persona=array();
		while($persona=$resultado->fetch_assoc()){
			$persona[]=$personas;
		}
		$respuesta['cantidad']=2;
		$respuesta['items']=$personas;
	}else{
		$respuesta['success']=false;
	}
	echo json_encode($respuesta);
?>