<?php 
	require('vendor/autoload.php');
	
	$generador=Faker\Factory::create();
	//echo $generador->text;
	for($i=0;$i<11;$i++){
		echo $generador->name."<br>";
		echo $generador->address."<br>";
		echo $generador->text."<br>";
		echo "========================"."<br>";
	}
 ?>