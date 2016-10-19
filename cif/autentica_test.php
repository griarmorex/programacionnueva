<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
if (!isset($_SESSION)) session_start();
	$usuario='jaimito';
	$clave='secreto';

	if ($usuario==='jaimito' AND $clave==='secreto') {
		$_SESSION['autenticado']=TRUE;
	}else{
		$_SESSION['autenticado']=FALSE;
		}
 ?>
</body>
</html>