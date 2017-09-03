<?php
	include_once "app/Conexion.inc.php";
	include_once "app/RepositorioEmpresas.inc.php";
	Conexion::abrir_conexion();
	// var_dump(Conexion::obtener_conexion());
?>

<!-- footer start here --> 
<div class="footer-agile">
	<div class="container">
		<div class="footer-agileinfo"> 
			<div class="col-md-5 col-sm-5 footer-wthree-grid"> 
				<div class="agileits-w3layouts-tweets">  
					<h5><a href="index.html">Horizonte Viajes</a></h5> 
					<div class="social-icon footerw3ls">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
					</div>
				</div>
			<?php 
				echo RepositorioEmpresas::create_info(RepositorioEmpresas::obtener_info_empresa(Conexion::obtener_conexion()),'leyenda');
			?>
			</div> 
			<div class="col-md-3 col-sm-3 footer-wthree-grid">
				<h3>Links rápidos</h3>
				<ul>
					<li><a href="index.php"><span class="glyphicon glyphicon-menu-right"></span> Principal</a></li>
					<li><a href="about.php"><span class="glyphicon glyphicon-menu-right"></span> Sobre Nosotros</a></li> 
					<li><a href="tours.php"><span class="glyphicon glyphicon-menu-right"></span> Viajes</a></li>
<!-- 						<li><a href="codes.html"><span class="glyphicon glyphicon-menu-right"></span> Short Codes</a></li> -->
					<li><a href="contact.php"><span class="glyphicon glyphicon-menu-right"></span> Contáctanos</a></li>
				</ul>
			</div> 	 
			<div class="col-md-4 col-sm-4 footer-wthree-grid">
			<!-- Contacto Info			 -->
			<?php 
			// var_dump(Conexion::obtener_conexion());

				echo RepositorioEmpresas::create_info(RepositorioEmpresas::obtener_info_empresa(Conexion::obtener_conexion()),'footer');
			?>
				<!-- <h3>Contacto Info</h3>
				<ul>
					<li>Dr. Eusebio Lillo 2139 c/Bélgica</li> 
					<li>Telefono: 607.207/8</li>
					<li><a href="mailto:horizonteviajes@tigo.com.py"> horizonteviajes@tigo.com.py</a></li>
					<li>Asunción - Paraguay</li>
				</ul> -->
			</div>
			<div class="clearfix"> </div>		
		</div>
		<div class="copy-right"> 
			<p>© 2017 Horizonte Viajes | Design by <a href="mailto:zayaslui@gmail.com"> zayaslui</a></p>
		</div>
	</div>
</div> 
<!-- //footer end here -->  
