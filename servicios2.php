<?php
	include_once "app/Conexion.inc.php";
	include_once "app/RepositorioMenuServicios.inc.php";
	Conexion::abrir_conexion();
	echo RepositorioMenuServicios::obtener_menu_servicios(Conexion::obtener_conexion());
?>

<!-- <div id="tit_" class="container">
	<h2 class="title mt0">
		servicios
	</h2>	
</div>
<div class="container color_grid contenedor_grid">
	<section id="grid" class="grid clearfix container-fluid">	
		<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z" class="wow fadeInLeft col-md-3 col-xs-12 col-sm-12" data-row-offset="100">
			<figure>
					<img src="images/guia2.jpg">				
				<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M180,160C180,160,0,218,0,218C0,218,0,0,0,0C0,0,180,0,180,0C180,0,180,160,180,160"></path><desc>Created with Snap</desc><defs></defs></svg>
				<figcaption>
					<h2>Guía Turística</h2>
					<p>Contamos con los mejores Guias para todos clientes en el idioma de su eleccion ...</p>

				</figcaption>
			</figure>
		</a>
		<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z" class="wow fadeInLeft col-md-3 col-xs-12 col-sm-12" data-row-offset="100">
			<figure>
				<img src="images/restaurant.jpg">
				<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M180,160C180,160,0,218,0,218C0,218,0,0,0,0C0,0,180,0,180,0C180,0,180,160,180,160"></path><desc>Created with Snap</desc><defs></defs></svg>
				<figcaption>
					<h2>Servicios de restauración</h2>
					<p>Proporcionamos servicios en el establecimiento o en instalaciones ajenas con la intención de satisfacer a nuestros clientes</p>

				</figcaption>
			</figure>
		</a>
		<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z" class="wow fadeInRight col-md-3 col-xs-12 col-sm-12" data-row-offset="100">
			<figure>
				<img src="images/alojamiento.jpg">
				<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M180,160C180,160,0,218,0,218C0,218,0,0,0,0C0,0,180,0,180,0C180,0,180,160,180,160"></path><desc>Created with Snap</desc><defs></defs></svg>
				<figcaption>
					<h2>Servicio de alojamiento</h2>
					<p>Disponemos de diferentes tipos de alojamientos turisticos con el objetivo de cubrir todas exigencias.</p>

				</figcaption>
			</figure>
		</a>	
		<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z" class="wow fadeInRight col-md-3 col-xs-12 col-sm-12" data-row-offset="100">
			<figure>
				<img src="images/autobus.jpg">
				<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M180,160C180,160,0,218,0,218C0,218,0,0,0,0C0,0,180,0,180,0C180,0,180,160,180,160"></path><desc>Created with Snap</desc><defs></defs></svg>
				<figcaption>
					<h2>Servicios de transportación</h2>
					<p>Contamos servicios de transporte aéreos y terrester que poseen una infraestructura y bienes de equipo para transportar o trasladar personas.</p>

				</figcaption>
			</figure>
		</a>
	</section>
</div>	 -->