<?php

	class Usuario{

		private $id;
		private $nombre;
		private $email;
		private $password;
		private $fecha_registro;
		private $activo;

		/*contructor*/
		public function __construct($id,$nombre,$email,$password,$fecha_registro,$activo){
			$this -> id =  $id;
			$this -> nombre =  $nombre;
			$this -> email =  $email;			
			$this -> password =  $password;
			$this -> fecha_registro =  $fecha_registro;
			$this -> activo =  $activo;
		}

		//getters
		//id
		public function obtener_id(){
			return $this -> id;
		}
		//nombre
		public function obtener_nombre(){
			return $this -> nombre;
		}
		//email
		public function obtener_email(){
			return $this -> email;
		}
		//password
		public function obtener_password(){
			return $this -> password;
		}
		//fecha_registro
		public function obtener_fechaRegistro(){
			return $this -> fecha_registro;
		}
		//activo
		public function obtener_activo(){
			return $this -> activo;
		}

		//setters
		//id
		public function editar_id($id){
			$this -> id = $id;
		}
		//nombre
		public function editar_nombre($nombre){
			$this -> nombre = $nombre;
		}
		//email
		public function editar_email($email){
			$this -> email = $email;
		}
		//password
		public function editar_password($password){
			$this -> password = $password;
		}
		//fecha_registro
		public function editar_fechaRegistro($fecha_registro){
			$this -> fecha_registro = $fecha_registro;
		}
		//activo
		public function editar_activo($activo){
			$this -> activo = $activo;
		}

	}
?>