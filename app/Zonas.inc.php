<?php
class Zonas{
	private $zona;
	private $descripcion;

	public function __construct($zona,$descripcion){
		$this -> zona = $zona;
		$this -> descripcion = $descripcion;
	}

	//getter
	public function obtener_zona(){
		return $this -> zona;
	}
	public function obtener_descripcion(){
		return $this -> descripcion;
	}
}


?>