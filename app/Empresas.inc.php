<?php

class Empresas{
	private $empresa;
	private $direccion;
	private $telefonos;
	private $correo;
	private $correo2;
	private $leyenda;

	/*contructor*/
	public function __construct($empresa,$direccion,$telefonos,$correo,$correo2,$leyenda){
		$this -> empresa = $empresa;
		$this -> direccion = $direccion;
		$this -> telefonos = $telefonos;
		$this -> correo = $correo;
		$this -> correo2 = $correo2;
		$this -> leyenda = $leyenda;		
	}	

	/*getters*/
	public function obtener_empresa(){
		return $this -> empresa;
	}
	public function obtener_direccion(){
		return $this -> direccion;
	}	
	public function obtener_telefono(){
		return $this -> telefonos;
	}
	public function obtener_correo(){
		return $this -> correo;
	}
	public function obtener_correo2(){
		return $this -> correo2;
	}
	public function obtener_leyenda(){
		return $this -> leyenda;
	}
}
?>