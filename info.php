<?php 

	include_once "app/Conexion.inc.php";
	include_once "app/RepositorioGaleria.inc.php";
	include_once "app/RepositorioEmpresas.inc.php";	
	include_once "app/RepositorioMenuServicios.inc.php";		
	Conexion::abrir_conexion();



// echo RepositorioGaleria::obtener_galeria(Conexion::obtener_conexion());
// echo RepositorioGaleria::obtener_galeria_zona_disponibles(Conexion::obtener_conexion());

echo RepositorioMenuServicios::obtener_menu_servicios(Conexion::obtener_conexion());

?>