<!--- albums -->


<?php
	echo $_POST['sitio'];
?>
<div class="albums"> 
	<div class="w3lalbums-grid">
		<div class="col-md-6 col-sm-6 albums-left"> 
			<!-- <div class="wthree-almubimg"></div> -->
			<!-- slider para sitio1 -->
				<div id="slider-wrapper">

					<!-- LayerSlider start -->

					<div id="layerslider" class="layerslider" style="width: 1200px; height: 900px;">

						<!-- slide one start -->

						<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

							<!-- slide background image -->

							<img src="images/costanera.jpg" class="ls-bg" alt="Slide background"/>

							<!-- layer one -->

							<h1 class="ls-l" style="top: 100px; left: 100px;" data-ls="
								offsetxin: 0;
								offsetxout: 300;
								offsetyin: top;
								offsetyout: 300;
								durationin: 2000;
								durationout: 2000;
								delayin: 2000;
								rotateyin: 60;
							">Horizonte viajes</h1>

							<!-- layer two -->

			<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
								offsetxin: left;
								offsetxout: right;
								offsetyin: 150;
								offsetyout: -250;
								fadein: false;
								fadeout: false;
								easingin: easeoutquart;
								easingout: easeinquart;
								durationin: 2500;
								durationout: 2500;
								delayin: 500;
								showuntil: 1;
							">
			 -->
						</div>

						<!-- slide one end -->

						<!-- slide two start -->

						<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

							<!-- slide background image -->

							<img src="images/costanera1.jpg" class="ls-bg" alt="Slide background"/>

							<!-- layer one -->

<!-- 							<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
								offsetxin: -100;
								offsetxout: 0;
								offsetyin: 0;
								offsetyout: bottom;
								durationin: 2500;
								delayin: 1000;
								skewxin: 60;
							">We like Tucans :)</h2> -->

							<!-- layer two -->

			<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
								offsetxin: right;
								offsetxout: 0;
								offsetyin: 200;
								offsetyout: bottom;
								rotatein: 50;
								rotateout: -20;
								fadein: false;
								fadeout: false;
								easingin: easeoutquart;
								easingout: easeinquart;
								durationin: 2500;
								delayin: 500;
							"> -->

						</div>

						<!-- slide two end -->

						<!-- slide 3 start -->

						<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

							<!-- slide background image -->

							<img src="images/beach_people.jpg" class="ls-bg" alt="Slide background"/>

							<!-- layer one -->

							<!-- <h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
								offsetxin: -100;
								offsetxout: 0;
								offsetyin: 0;
								offsetyout: bottom;
								durationin: 2500;
								delayin: 1000;
								skewxin: 60;
							">We like Tucans :)</h2> -->

							<!-- layer 3 -->

			<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
								offsetxin: right;
								offsetxout: 0;
								offsetyin: 200;
								offsetyout: bottom;
								rotatein: 50;
								rotateout: -20;
								fadein: false;
								fadeout: false;
								easingin: easeoutquart;
								easingout: easeinquart;
								durationin: 2500;
								delayin: 500;
							"> -->

						</div>

						<!-- slide 3 end -->
					</div>

					<!-- LayerSlider end -->

				</div>


			<script>
			$(document).ready(
				function(){
					$("#layerslider").layerSlider({
							pauseOnHover: false,
							skinsPath: 'skins/'
						});
				});
			</script>


			<!-- endslider -->
		</div>

		<div class="col-md-6 col-sm-6 albums-right">
			<div class="wrapper_lugar">
				<h4 class="">Ciudad de Encarnación </h4>
			</div>
				<div class="wrapper_precio">
				<!-- Desde : <span class="label label-success precio">1.400.000 Gs.</span> -->
					<div class="row destacados">  
					      <div class="col-md-12">
					          <div class="box1">
					          <h4>Desde : 1.400.000 Gs.</h4>
					    	</div>
					  	</div>
					</div>  
				</div>
			<p>Duis nulla nulla, faucibus id diam ac, luctus sodales purus. Quisque nibh ipsum, venenatis vitae imperdiet eu, commodo nec sem. Ut accumsan tellus quis velit mattis sollicitudin. Etiam ullamcorper sapien sed purus suscipit, eu congue justo pulvinar. </p>

			<div class="info">
		        <div class="row">
		            <div class="col-xs-8 col-sm-8 col-md-8">
						<span>3 NOCHES</span>
	                </div><!-- 
		            <div class="col-xs-4 col-sm-4 col-md-4">
						<a href="#">Saber Más</a>
					</div> -->
		        </div>
		    </div>			
			
			<button class="btnCustom luis" id="customBtn" name="customBtn">
			  <p>Agendarme</p>
			  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
			    <path  id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
			M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path> 
			  </svg>
			</button>
		</div>
		<div class="clearfix"></div>
	</div> 
	<div class="clearfix"></div>  
</div>
<!--- //albums --> 

