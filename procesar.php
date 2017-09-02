<?php
	$_SESSION['session'] = 'index';

	$sitio = $_POST['sitio'].'.php';
	
	include('header.php');
	// include('text_banner_little.php');
	
	include 'detalles_de_promociones.php';

	include('today.php');
	include('boletin.php');
	include('viajes/modal_viajes.php');
	include('footer.php');
	include('javascript.php');

?>