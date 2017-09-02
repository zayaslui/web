<?php
	
	include_once "Conexion.inc.php";
	include_once "RepositorioPromociones.inc.php";
	Conexion::abrir_conexion();


	$zona = json_encode($_POST['d']);
	$_SESSION["zona"] = $zona;


	echo RepositorioPromociones::obtener_promociones_zona(Conexion::obtener_conexion(),$zona);
?>