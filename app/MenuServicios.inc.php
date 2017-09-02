<?php
	class MenuServicios{
		
		private $menu_servicio;
		private $imagen;
		private $link;
		private $titulo;
		private $contenido;

		public function __construct($menu_servicio,$imagen,$link,$titulo,$contenido){
			$this -> menu_servicio = $menu_servicio;
			$this -> imagen = $imagen;
			$this -> link = $link;
			$this -> titulo = $titulo;
			$this -> contenido = $contenido;
		}

		/*getters*/
		public function obtener_menu_servicio(){
			return $this -> menu_servicio;
		}
		public function obtener_imagen(){
			return $this -> imagen;
		}
		public function obtener_link(){
			return $this -> link;
		}
		public function obtener_titulo(){
			return $this -> titulo;
		}
		public function obtener_contenido(){
			return $this -> contenido;
		}
		
	}
?>
