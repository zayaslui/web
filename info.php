<?php 

	include_once "app/Conexion.inc.php";
	include_once "app/RepositorioGaleria.inc.php";
	include_once "app/RepositorioEmpresas.inc.php";	
	include_once "app/RepositorioMenuServicios.inc.php";		
	Conexion::abrir_conexion();

// echo RepositorioGaleria::obtener_galeria(Conexion::obtener_conexion());
// echo RepositorioGaleria::obtener_galeria_zona_disponibles(Conexion::obtener_conexion());

echo "testing :".Conexion::testing();

echo "<br>";

	$sql = "select *from detalles";
	$sentencia = $conexion -> prepare($sql);
	$sentencia -> execute();
	$resultado = $sentencia -> fetchAll();

	var_dump($resultado);



	echo $MYSQL_USER;
?>