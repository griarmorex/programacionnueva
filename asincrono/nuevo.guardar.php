<?php 
	//* Elscript devuelve: 
	//* 1.Succes: estado de ejecucion  *//
	//* 2.id: id del registro insertado *//
	include('../crud/inc/conexion.php');

	$oRespuesta=array();

	if($conexion){
		$sql="INSERT INTO persona SET "
			. "paterno='{$_POST['text-paterno']}',"
			. "materno='{$_POST['text-materno']}',"
			. "nombres='{$_POST['text-nombres']}'" ;

		$resultado=$conexion->query($sql);
		
		$oRespuesta['success']=TRUE;
		$oRespuesta['id']=$conexion->insert_id;

	}else{

		$oRespuesta['success']=FALSE;

		}

	echo json_encode($oRespuesta);
	
 ?>