<?php
	Class Conexion{

		private static $conexion;

		public static function abrir_conexion(){
			if(!isset(self::$conexion)){
				try {
					include_once "config.inc.php";

					/*setear variable de conexion*/

					self::$conexion = new PDO("mysql:dbname=".$config['nombre_base_datos'].";host=".$config['nombre_servidor'],$config['nombre_usuario'],$config['password']);
					self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					self::$conexion -> exec("SET CHARACTER SET utf8");

				} catch (PDOException $e) {
					print "Error" . $e -> getMessage()."<br>";
					die();
				}
			}
		}
		public static function cerrar_conexion(){

			if(isset(self::$conexion)){
				self::$conexion=null;
			}
		}
		public static function obtener_conexion(){
			return self::$conexion;
		}
		public static function testing(){
			if(isset(self::$conexion)){
				echo "conxion exitosa";
			}	
		}
	}

?>