<!DOCTYPE html>
<html>
<head>
	<title>10-08-2016</title>
</head>
<body>
	<?php 
		date_default_timezone_set('America/Lima');
		$hora_lima=date("H_i_s");

		date_default_timezone_set('Europe/paris');
		$hora_paris=date("H_i_s");

		echo "<p> la hor en lima es :".$hora_lima."</p>";

		echo "<p> la hor en paris es :".$hora_paris."</p>";
	?>
</body>
</html>