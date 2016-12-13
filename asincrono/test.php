<?php
	include('../crud/inc/conexion.php');
?>
<?php 
	$persona['paterno']="Flores";
	$persona['materno']="Apaza";
	$persona['nombres']="Jaime";
	$persona['personas_id']="8";

	//echo json_encode($persona);
	$personas[]=$persona;
	$personas[]=$persona;

	$respuesta['cantidad']=2;
	$respuesta['items']=$personas;

	echo json_encode($respuesta);//json_encode dato universal **J-ava, S-cript, O-bject, N-otation** <XML>--> **X-tensible, M-arkup, L-anguaje**
	//echo json_encode($personas);
 ?>

