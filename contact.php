<?php
	$_SESSION['session'] = 'contact';
	include('header.php');
	include('text_banner_little.php');
?>
<!-- contact -->
<div class="welcome contact">
	<div class="container">  
		<h3 class="agileits-title">Contáctanos</h3>   
		<div class="contact-w3ls-row">
			<form action="#" method="post">
				<input type="text" name="First Name" placeholder="Nombre" required="">
				<input class="email" name="Last Name" type="text" placeholder="Apellido" required="">
				<input type="text" name="Number" placeholder="Número" required="">
				<input class="email" name="Email" type="text" placeholder="Email" required="">
				<textarea name="Message" placeholder="Mensaje" required=""></textarea>
				<input type="submit" value="Enviar">
			</form>
		</div>  
	</div>
</div>
<!-- //contact -->

<!-- map -->
<div class="map">
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d450.9228857889769!2d-57.56792716592476!3d-25.291330166330155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32f710297aa785a5!2sHorizonte+Viajes!5e0!3m2!1ses!2ses!4v1501182251396" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14429.541880941535!2d-57.57632893291137!3d-25.291250033619516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da89f880bbf3f%3A0x32f710297aa785a5!2sHorizonte+Viajes!5e0!3m2!1ses!2ses!4v1504185471513" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- //map -->
<?php
	include('today.php');
	include('boletin.php');
	include('footer.php');
	include('javascript.php');
?>