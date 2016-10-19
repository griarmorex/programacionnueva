<?php 
	/**
	El script devuelve:
		1.-success : Estado de Ejecucion.
		2.-id : id del registro insertado.
	**/
	include('../crud/inc/conexion.php');
	$oRespuesta=array();
	if($conexion){
		$sql="INSERT INTO personas SET "
			. "paterno='{$_POST['text-paterno']}',"
			. "materno='{$_POST['text-materno']}',"
			. "nombres='{$_POST['text-nombres']}'";
		$resultado=$conexion->query($sql);
		
		$oRespuesta['success']=true;
		$oRespuesta['id']=$conexion->insert_id;
	}else{
		$oRespuesta['success']=false;
	}
		echo json_encode($oRespuesta);
?>