<?php 
class Bd{
	protected $conexion;
	private $servidor;
	private $usuario;
	private $clave;
	private $basedatos;
	
	public function __construct($s,$u,$c,$bd){
		
		$this->conexion=new mysqli($s,$u,$c,$bd);
	
			if($this->conexion->connect_errno){
				echo "Error al conectar a la Bd";
			}
	
	}
}
?>