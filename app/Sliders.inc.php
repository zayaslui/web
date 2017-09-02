<?php
class Sliders{

	private $slider;
	private $promocion;
	private $imagen;
	private $clase;

	/*constructor*/
	public function __construct($slider,$promocion,$imagen,$clase){
		$this -> slider = $slider;
		$this -> promocion = $promocion;
		$this -> imagen = $imagen;
		$this -> clase = $clase;

	}

	/*getters*/
	public function obtener_slider(){
		return $this -> slider;
	}
	public function obtener_promocion(){
		return $this -> promocion;
	}
	public function obtener_imagen(){
		return $this -> imagen;
	}
	public function obtener_clase(){
		return $this -> clase;
	}
}

?>