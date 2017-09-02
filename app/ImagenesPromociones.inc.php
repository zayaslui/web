<?php
class ImagenesPromociones{
	private $imagen_promocion;
	private $promocion;
	private $imagen;
	private $descripcion;

	public function __construct($imagen_promocion,$promocion,$imagen,$descripcion){
		$this -> imagen_promocion = $imagen_promocion;
		$this -> promocion = $promocion;
		$this -> imagen = $imagen;
		$this -> descripcion = $descripcion;
	}

	public function obtener_imagen_promocion(){
		return $this -> imagen_promocion;
	}

	public function obtener_promocion(){
		return $this -> promocion;
	}

	public function obtener_imagen(){
		return $this -> imagen;
	}
	public function obtener_descripcion(){
		return $this -> descripcion;
	}
}

?>