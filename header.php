<?php
	include_once "app/Conexion.inc.php";
	include_once "app/RepositorioEmpresas.inc.php";
	Conexion::abrir_conexion();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>HORIZONTE Viajes Agencia de Viajes en Paraguay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="horizonte, turismo, agencia, viajes, paraguay, viajar, travel, asuncion, camboriu, paseo estudiantil" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" />    -->
<!-- <link href="css/style.css" type="text/css" rel="stylesheet" media="all">    -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<link rel="stylesheet" href="css/swipebox.css">  
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
<!-- //web-fonts --> 
<!-- slider -->
<link rel="stylesheet" href="css/reset.css" type="text/css"   charset="utf-8" />
<!-- <link rel="stylesheet" href="css/fractionslider.css"> -->

	<!-- LayerSlider stylesheet -->
<link rel="stylesheet" href="css/layerslider.css" type="text/css">

 
<!-- External libraries: jQuery & GreenSock -->
<!-- <script src="sources/js/jquery.js" type="text/javascript"></script> -->
<script src="js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="js/layerslider.transitions.js" type="text/javascript"></script>
<script src="js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="js/greensock.js" type="text/javascript"></script>
<script src="js/wow.js" type="text/javascript"></script>

<link rel="stylesheet" href="css/animate.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/component.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
<script src="js/snap.svg-min.js"></script>

<!-- <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script> -->
<!-- <script src="js/main.js" type="text/javascript" charset="utf-8"></script> -->
</head>
<body>
	<!-- comentarios -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- seguirpagina -->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>


	<div class="telefono">
		<div class="tel">
			<?php 
				echo RepositorioEmpresas::create_info(RepositorioEmpresas::obtener_info_empresa(Conexion::obtener_conexion()),'encabezado'); 
			?>
		</div>
		<!-- <div class="social-icon">
			<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
			<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
			<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
		</div>  -->
	</div>
	<!-- banner -->
	<div class="<?php echo ($_SESSION['session']=='index')?'':'banner about-banner';?>">  
<!-- 		<div class="tel">
			
		</div> -->
		<div class="header agileinfo-header" id="particles-js">
			<!-- header -->
			<nav class="navbar navbar-default">
				<div class="container1">
					<div class="cover">
						<a href="index.php">
						<img src="images/logo.jpg" alt="" class="logo1" ></a>
					</div>	
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <h1 class="subtitulo"><a href="index.php">Horizonte<span> Viajes</span></a></h1> -->
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li class="cl-effect-20 flag_li"><a href="index.php" 
									class="flag_a <?php if($_SESSION['session']=='index'){echo 'active';}?>" data-letters="Principal">
									<span data-hover="Principal">Principal</span></a>
							</li>   
							<li class="cl-effect-20 flag_li">
								<a href="tours.php" class="flag_a <?php if($_SESSION['session']=='viajes'){ echo 'active';}?>">
									<span data-hover="Galeria">Galeria</span>
								</a>
							</li>
<!-- 							<li class="cl-effect-20 flag_li flag_li_dropdown">
								<a href="#" 
								class="dropdown-toggle flag_a dropdown_a
								<?php //if($_SESSION['session']=='servicios'){echo 'active';}?>" 
								data-toggle="dropdown" 
								role="button" 
								aria-haspopup="true" 
								aria-expanded="false">
								<span data-hover="Servicios" class="myspan">Servicios</span>
								</a>
								<ul class="flag_dropdown dropdown-lz-menu">
									<li class="submenu"><a href="#">Servicio 1</a></li>
									<li class="submenu"><a href="#">Servicio 2</a></li>
								</ul>
							</li>  
 -->


<!-- 							<li class="flag_li">
								<a href="#" 
								class="dropdown-toggle btn w3ls-hover flag_a" 
								data-toggle="dropdown" 
								role="button" 
								aria-haspopup="true" 
								aria-expanded="false">Servicios<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="icons.html">Servicio 1</a></li>
									<li><a href="codes.html">Servicio 2</a></li>     
								</ul>
							</li>  
 -->						<li class="cl-effect-20 flag_li">
								<a href="about.php" 
								class="flag_a  <?php if($_SESSION['session']=='about'){ echo 'active';}?>">
								<span data-hover="Nosotros">Nosotros</span>
								</a>
							</li>

							<li class="cl-effect-20 flag_li">
								<a href="contact.php" class="flag_a <?php if($_SESSION['session']=='contact'){ echo 'active';}?>"><span data-hover="Contacto">Contacto</span>
								</a>
							</li>
						</ul>


						<div class="social-icon">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div> 

						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	

<?php
	// Conexion::cerrar_conexion();
?>