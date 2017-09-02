<?php
class Galerias{
	private $galeria;
	private $imagen;
	private $zona;
	private $titulo;

	public function __construct($galeria,$imagen,$zona,$titulo){
		$this -> galeria = $galeria;
		$this -> imagen = $imagen;
		$this -> zona = $zona;
		$this -> titulo = $titulo;		

	}
	/*getters*/
	public function obtener_galeria(){
		return $this -> galeria;
	}
	public function obtener_imagen(){
		return $this -> imagen;
	}
	public function obtener_zona(){
		return $this -> zona;
	}
	public function obtener_titulo(){
		return $this -> titulo;
	}	
}

?>