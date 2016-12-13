<?php 
	//**//
	include('../crud/inc/conexion.php');

	$oRespuesta=array();

	if($conexion){
		$sql="DELETE FROM persona "
			."WHERE personas_id={$_POST['id']}";

		$resultado=$conexion->query($sql);
		
		$oRespuesta['success']=TRUE;

	}else{

		$oRespuesta['success']=FALSE;

		}

	echo json_encode($oRespuesta);
	
 ?>