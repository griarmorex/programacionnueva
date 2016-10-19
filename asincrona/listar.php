<?php 
	/**
	El script devuelve:
		1.-success : Estado de Ejecucion.
		2.-personas : Listado de personas.
	**/
	include('../crud/inc/conexion.php');
	$oRespuesta=array();
	if($conexion){
		$sql='SELECT p. * FROM personas p';
		$resultado=$conexion->query($sql);
		$tmp_personas=array();
		while($personas=$resultado->fetch_assoc()){
			$tmp_personas[]=$personas;
		}
		$oRespuesta['success']=true;
		$oRespuesta['personas']=$tmp_personas;
	}else{
		$oRespuesta['success']=false;
	}
		echo json_encode($oRespuesta);
?>