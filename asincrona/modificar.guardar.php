<?php 
	/**
	El script devuelve:
		1.-success : Estado de Ejecucion.
		2.-id : id del registro a actualizar.
	**/
	include('../crud/inc/conexion.php');
	$oRespuesta=array();
	if($conexion){
		$sql="UPDATE personas SET "
			. "paterno='{$_POST['text-paterno']}',"
			. "materno='{$_POST['text-materno']}',"
			. "nombres='{$_POST['text-nombres']}' WHERE personas_id={$_POST['id']}";
		$resultado=$conexion->query($sql);
		
		$oRespuesta['success']=true;
		
	}else{
		$oRespuesta['success']=false;
	}
		echo json_encode($oRespuesta);
?>