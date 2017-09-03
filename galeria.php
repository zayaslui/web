<?php
	include_once "app/Conexion.inc.php";
	include_once "app/RepositorioGaleria.inc.php";
	Conexion::abrir_conexion();
?>
<!-- tours -->
<div class="welcome portfolio">
	<div class="container">  
		<h3 class="agileits-title">Nuestros Tours</h3>  
		<div class="gallery_gds">
			<!-- <ul class="simplefilter">
				<li class="active" data-filter="all">Todos</li>
				<li data-filter="1">Argentina</li>
				<li data-filter="2">Brasil</li>
				<li data-filter="3">Uruguay</li>
			</ul> -->
			<?php
				echo RepositorioGaleria::obtener_galeria_zona_disponibles(Conexion::obtener_conexion());
				echo RepositorioGaleria::obtener_galeria(Conexion::obtener_conexion());
			?>
<!-- 			<div class="filtr-container">
				<div class="col-md-4 col-sm-4 filtr-item" data-category="1" data-sort="Busy streets">
					<div class="agileits-img">
						<a href="images/g1.jpg" target="blank" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img class="img-responsive" src="images/g1.jpg" alt=""  /> 
						</a> 
					</div>
				</div>

				<div class="col-md-4 col-sm-4 filtr-item" data-category="2, 3" data-sort="Luminous night">
					<div class="agileits-img">
						<a href="images/g2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
							<img src="images/g2.jpg" alt="" class="img-responsive" />
						</a>	
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4 filtr-item" data-category="1" data-sort="City wonders">
					<div class="agileits-img">
						<a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="images/g3.jpg" alt="" class="img-responsive  " />
						</a>	
					</div>
				</div>
				<div class="col-md-4 col-sm-4 filtr-item" data-category="3" data-sort="Industrial site">
					<div class="agileits-img">
						<a href="images/g4.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
							<img src="images/g4.jpg" alt="" class="img-responsive " />
						</a>	
					</div>
				</div>
				<div class="col-md-4 col-sm-4 filtr-item" data-category="3" data-sort="In production">
					<div class="agileits-img">
						<a href="images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="images/g5.jpg" alt="" class="img-responsive  " />
						</a>	
					</div>
				</div>
				<div class="col-md-4 col-sm-4 filtr-item" data-category="2" data-sort="Peaceful lake">
					<div class="agileits-img">
						<a href="images/img2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="images/img2.jpg" alt="" class="img-responsive  " />
						</a>	
					</div>
				</div> -->
			   <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!-- //tours --> 
