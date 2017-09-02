<?php

class Promociones{

	private $promocion;
	private $leyenda;
	private $ruta;
	private $precio;
	private $imagen;
	private $intervalo;
	private $moneda;
	private $destino;
	private $detalles;

	/*constructor*/
	public function __construct($promocion,$leyenda,$ruta,$precio,$imagen,$intervalo,$moneda,$destino,$detalles){
		$this -> promocion = $promocion;
		$this -> leyenda = $leyenda;
		$this -> ruta = $ruta;
		$this -> precio = $precio;
		$this -> imagen = $imagen;
		$this -> intervalo = $intervalo;
		$this -> moneda = $moneda;
		$this -> destino = $destino;
		$this -> detalles = $detalles;
	}
	//getters
	//promocion
	public function obtener_promocion(){
		return $this -> promocion;
	}
	//leyenda
	public function obtener_leyenda(){
		return $this -> leyenda;
	}
	//ruta
	public function obtener_ruta(){
		return $this -> ruta;
	}
	//precio
	public function obtener_precio(){
		return $this -> precio;
	}
	//imagen
	public function obtener_imagen(){
		return $this -> imagen;
	}
	//intervalo
	public function obtener_intervalo(){
		return $this -> intervalo;
	}
	//moneda
	public function obtener_moneda(){
		return $this -> moneda;
	}
	//destino
	public function obtener_destino(){
		return $this -> destino;
	}
	//detalles}
	public function obtener_detalles(){
		return $this -> detalles;
	}
	//no found
	public function obtener_sin_destino(){
		
	}
	//zona
	public function obtener_zona(){
		return $this -> zona;
	}
}

?>