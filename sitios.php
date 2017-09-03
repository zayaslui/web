<!--- albums -->
<div class="albums"> 
	<div class="w3lalbums-grid">
		<div class="col-md-6 col-sm-6 albums-left"> 
			<div class="wthree-almubimg">  
			</div>
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
					          <h4>Precio : 1.400.000 Gs.</h4>
					    	</div>
					  	</div>
					</div>  
				</div>
			<p>Duis nulla nulla, faucibus id diam ac, luctus sodales purus. Quisque nibh ipsum, venenatis vitae imperdiet eu, commodo nec sem. Ut accumsan tellus quis velit mattis sollicitudin. Etiam ullamcorper sapien sed purus suscipit, eu congue justo pulvinar. </p>

			<div class="info">
		        <div class="row">
		            <div class="col-xs-8 col-sm-8 col-md-8">
						<span>3 NOCHES</span>
	                </div>
		            <div class="col-xs-4 col-sm-4 col-md-4">
						<a href="#">Saber Más</a>
					</div>
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
	<div class="w3lalbums-grid">
		<div class="col-md-6 col-sm-6 albums1-right"> 
			<div class="wthree-almubimg wthree1-almubimg">  
			</div>
		</div>
		<div class="col-md-6 col-sm-6 albums1-left">
			<h4>Sitio 2</h4>
			
			<!-- precio -->
				<div class="wrapper_precio">
				<!-- Desde : <span class="label label-success precio">1.400.000 Gs.</span> -->
					<div class="row destacados">  
					      <div class="col-md-12">
					          <div class="box1">
					          <h4>Precio : 1.400.000 Gs.</h4>
					    	</div>
					  	</div>
					</div>  
				</div>
			<!-- precio	-->

			<p>Duis nulla nulla, faucibus id diam ac, luctus sodales purus. Quisque nibh ipsum, venenatis vitae imperdiet eu, commodo nec sem. Ut accumsan tellus quis velit mattis sollicitudin. Etiam ullamcorper sapien sed purus suscipit, eu congue justo pulvinar. </p>
			<div>
			<!-- noches -->
			<div class="info">
		        <div class="row">
		            <div class="col-xs-8 col-sm-8 col-md-8">
						<span>2 NOCHES</span>
	                </div>
		            <div class="col-xs-4 col-sm-4 col-md-4">
						<a href="#">Saber Más</a>
					</div>
		        </div>
		    </div>			

				<button class="btnCustom luis" id="customBtn2" name="customBtn2">
				  <p>Agendarme</p>
				  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
				    <path  id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
				M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path> 
				  </svg>
				</button>

			</div>

		<!-- <div><input type="button" value="Agendarme" data-toggle="modal" data-target="#modalForm"></div> -->
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>  
</div>
<!--- //albums --> 

<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Fomulario de Reservación</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Ingrese su nombre"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Ingrese su Email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Lugar</label>
                        <input type="text" class="form-control" id="inputLugar" name="inputLugar" placeholder="" readonly="" />
                    </div>                    
                    <div class="form-group">
                        <label for="inputMessage">Mensaje</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Ingrese el mensaje"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">Enviar</button>
            </div>
        </div>
    </div>
</div>