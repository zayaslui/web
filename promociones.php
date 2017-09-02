<?php
	include_once "app/Conexion.inc.php";
	include_once "app/RepositorioPromociones.inc.php";
	include_once "app/RepositorioZonas.inc.php";

	Conexion::abrir_conexion();
	/*datos*/
	$promocion = RepositorioPromociones::obtener_todos(Conexion::obtener_conexion());
	//echo count($promocion);
	// Conexion::cerrar_conexion();
?>

<div class="container main main-center">
<!-- content -->
    <div class="content">
    	<h2 class="title mt0">Promociones y Paquetes</h2>
    	<!-- home -->
    	<?php
    		echo RepositorioZonas::obtener_zonas_promociones(Conexion::obtener_conexion());
    	?>
		<div class="list-home">
		<!-- list-packages -->
			<div class="list-packages">
			<!-- row -->
				<div id="contenido_paquetes" class="row contenido_paquetes col-md-12">
					<!-- contenido1 -->
					<?php
						echo RepositorioPromociones::obtener_promociones(Conexion::obtener_conexion());
					?>
					<!-- fin contenido1 -->
				</div>
				<!-- ROW -->
			</div>
			<!-- list-pack -->
		</div>
		<!-- home -->
	</div>
	<!-- content -->
</div>
<?php
	// Conexion::cerrar_conexion();
?>
