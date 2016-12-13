<?php
	//* Elscript devuelve: 
	//* 1.Succes: estado de ejecucion  *//
	//* 2.personas:listado de personas *//
	include('../crud/inc/conexion.php');
	$oRespuesta=array();
	if($conexion){
		$sql='SELECT p.* FROM persona p';
		$resultado=$conexion->query($sql);
		$tmp_personas=array();

		while($persona=$resultado->fetch_assoc()){
			$tmp_personas[]=$persona;
		}

		$oRespuesta['success']=TRUE;
		$oRespuesta['personas']=$tmp_personas;

	}else{

		$oRespuesta['success']=FALSE;

		}

	echo json_encode($oRespuesta);
 ?>