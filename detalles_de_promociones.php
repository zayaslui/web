<!--- albums -->
<?php
	

	include_once "app/Conexion.inc.php";
	include_once "app/RepositorioSliders.inc.php";
	include_once "app/RepositorioImagenesPromociones.inc.php";
	include_once "app/RepositorioPromociones.inc.php";

	Conexion::abrir_conexion();
	/*datos*/
	if(isset($_POST['sitio']))
	$_SESSION['sitio'] = $_POST['sitio'];

?>



<div class="albums"> 
	<div class="w3lalbums-grid">
		<div class="col-md-6 col-sm-6 albums-left"> 
			<!-- slider para sitio1 -->
			<?php
				//slider de la promocion
				echo RepositorioSliders::obtener_slider_promociones(Conexion::obtener_conexion(),$_SESSION['sitio']);
			?>
			<!-- endslider -->
		</div>
		
		<!-- start detalles -->
		<div class="col-md-6 col-sm-6 albums-right">
			<?php
				echo RepositorioPromociones::obtener_una_promocion(Conexion::obtener_conexion(),$_SESSION['sitio']);
			?>
		</div>
		<!-- end detalles -->

		<div class="clearfix"></div>
	</div> 
	<div class="clearfix"></div>  
</div>


<!--- //albums --> 
<div class="container adds_principal">
	<?php
		echo RepositorioImagenesPromociones::obtener_imagen_promocion(Conexion::obtener_conexion(),$_SESSION['sitio']);

		// Conexion::cerrar_conexion();
	?>
</div>