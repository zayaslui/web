<?php

class RepositorioPromociones{

	public static function obtener_todos($conexion){
		$promociones = array();

		if(isset($conexion)){
			try {
				include_once "Promociones.inc.php";

				$sql = "select a.*, b.descripcion as moneda,c.descripcion as destino from promociones a left join monedas b on b.moneda=a.moneda left join destinos c on c.destino=a.destino";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia ->fetchAll();

				if(count($resultado)){
					foreach ($resultado as $fila) {
						$promociones[] = new Promociones($fila['promocion'],$fila['leyenda'],$fila['ruta'],$fila['precio'],$fila['imagen'],$fila['intervalo'],$fila['moneda'],$fila['destino'],$fila['detalles']);
					}
				}else{
					print("no hay resultado");
				}


			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();
			}
		}else{
			// echo "no hay conexion";
		}
		return $promociones;
	}

	public static function obtener_promociones($conexion){
		$promociones = array();

		if(isset($conexion)){
			try {
				include_once "Promociones.inc.php";

				$sql = "select a.*, b.descripcion as moneda,c.descripcion as destino from promociones a left join monedas b on b.moneda=a.moneda left join destinos c on c.destino=a.destino";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia ->fetchAll();
				// var_dump($resultado);
				if(count($resultado)){
					//cargar el objeto
					foreach ($resultado as $fila) {
						$promociones[] = new Promociones($fila['promocion'],$fila['leyenda'],$fila['ruta'],$fila['precio'],$fila['imagen'],$fila['intervalo'],$fila['moneda'],$fila['destino'],$fila['detalles']);
					}

				}else{
					print("no hay resultado");
				}

			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();
			}
		}else{
			// echo "no hay conexion";
		}
		//crear el html
		//echo count($promociones);
		//promocion con detalles
		//return self::createPromocion($promociones);
		//promocion sin detalles
		return self::createPromocionSimple($promociones);		

	}

	public static function obtener_una_promocion($conexion,$promocion){
		$promociones = array();

		if(isset($conexion)){
			try {
				include_once "Promociones.inc.php";

				$sql = "select a.*, b.descripcion as moneda,c.descripcion as destino from promociones a left join monedas b on b.moneda=a.moneda left join destinos c on c.destino=a.destino where a.promocion=".$promocion;

				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia ->fetchAll();
				// var_dump($resultado);
				if(count($resultado)){
					//cargar el objeto
					foreach ($resultado as $fila) {
						$promociones[] = new Promociones($fila['promocion'],$fila['leyenda'],$fila['ruta'],$fila['precio'],$fila['imagen'],$fila['intervalo'],$fila['moneda'],$fila['destino'],$fila['detalles']);
					}

				}else{
					print("no hay resultado");
				}
			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();
			}
		}else{
			// echo "no hay conexion";
		}
		//crear el html

		//echo count($promociones);
		return self::createdetalles($promociones);
	}


	private function createDetalles($promociones){

		$html="";

		foreach ($promociones as $key => $value) {
		if($value->obtener_destino()){
			$destino = '<h4 class="">'.$value->obtener_destino().' </h4>';
		}else{
			$destino = '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Atencion!</strong> No ha cargado el destino en promociones.
</div>';
		}
		if($value->obtener_detalles()){
			$precio_moneda = '<h4>Desde : '.$value -> obtener_precio().' '.$value -> obtener_moneda().'</h4>';
		}else{
			$precio_moneda = '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Atencion!</strong> No ha cargado precio.
</div>';
		}
		if($value->obtener_detalles()){
			$detalles ='<p>'.$value->obtener_detalles().'</p>'; 
		}else{
			$detalles ='<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Atencion!</strong> No ha cargado el detalle.
</div>';
		}
		$html ='
			<div class="wrapper_lugar">
				'.$destino.'
			</div>
				<div class="wrapper_precio">
					<div class="row destacados">  
					      <div class="col-md-12">
					          <div class="box1">
					          '.$precio_moneda.'
					    	</div>
					  	</div>
					</div>  
				</div>
			'.$detalles.'

			<div class="info">
		        <div class="row">
		            <div class="col-xs-8 col-sm-8 col-md-8">
						<span>'.$value->obtener_intervalo().'</span>
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
';
		}
		return $html;
	}

	private function createPromocion($promociones){
		$html ="";
		$contador=0;
		$class="";

		foreach ($promociones as $value) {
		//para los efectos
		if ($contador%2==0){
			$class='wow_promocion wow bounceInLeft';
		}else{
			$class='wow_promocion wow bounceInRight';
		}
		$html .= '<div class="col-xs-12 col-sm-3 col-md-3 '.$class.'" data-row-offset="100">
					<div class="package-box">
						<a href="#">
							<!-- cambia -->
					    	<img src="data:image/jpg;base64,'.base64_encode($value->obtener_imagen()).'" width="263" height="166">
					    </a>
				        <div class="title">
				        <!-- cambia -->
					    	<h4 class="blue">'.$value->obtener_leyenda().'</h4 class="blue">
					    </div>
					    <div class="from">
					        <div class="row">
					            <div class="col-xs-4 col-sm-4 col-md-4 desde">Desde:</div>
					            <div class="col-xs-8 col-sm-8 col-md-8">
					            	<!-- cambia -->
					            	<p><strong> '.$value -> obtener_moneda().' '.$value -> obtener_precio().'</strong></p>
					            </div>
					        </div>
					    </div>
					    <div class="info">
					        <div class="row">
					            <div class="col-xs-8 col-sm-8 col-md-8">
					            <!-- cambia -->
					                <span>'.$value -> obtener_intervalo().'</span>
				                </div>
					            <div class="col-xs-4 col-sm-4 col-md-4">
									<form method="POST" action="procesar.php" >
										<input type="hidden" name="sitio" value="'.$value -> obtener_promocion().'">
										<input type="submit" class="btn" value="Más">
									</form>
								</div>
					        </div>
					    </div>
					</div>
				</div>

				';
			$contador++;
		}

		return $html;
	}

	private function createPromocionSimple($promociones){
		$html ="";
		$contador=0;
		$class="";

		foreach ($promociones as $value) {
		//para los efectos
		if ($contador%2==0){
			//$class='wow_promocion wow bounceInLeft';
			$class='wow_promocion wow fadeInLeft';			
		}else{
			//$class='wow_promocion wow bounceInRight';
			$class='wow_promocion wow fadeInRight';			
		}
		$html .= '<div class="col-xs-12 col-sm-3 col-md-3 '.$class.'" data-row-offset="100">
					<div class="package-box">
						<a href="#">
							<!-- cambia -->
					    	<img src="data:image/jpg;base64,'.base64_encode($value->obtener_imagen()).'" width="263" height="166">
					    </a>
				        <div class="title">
				        <!-- cambia -->
					    	<h4 class="blue">'.$value->obtener_leyenda().'</h4 class="blue">
					    </div>
						
					    <div class="info">
					        <div class="row">
					            <div class="col-xs-8 col-sm-8 col-md-9">
					            <!-- cambia -->
					                <span>'.$value -> obtener_intervalo().'</span>
				                </div>

					            <div class="col-xs-4 col-sm-4 col-md-3">
									<form method="POST" action="procesar.php" >
										<input type="hidden" name="sitio" value="'.$value -> obtener_promocion().'">
										<input type="submit" class="btn" value="Más">
									</form>
								</div>

					        </div>
					    </div>

					</div>
				</div>

				';
			$contador++;
		}

		return $html;
	}
	public static function obtener_promociones_zona($conexion,$zona){
		$promociones = array();
		$sql="";
		if(isset($conexion)){
			try {
				include_once "Promociones.inc.php";
				
				if(str_replace('"', '', $zona)==="0"){
					//echo "entro ";
					$sql = "select a.*, b.descripcion as moneda,c.descripcion as destino from promociones a left join monedas b on b.moneda=a.moneda left join destinos c on c.destino=a.destino";			
				}else{
					$sql = "select a.*, b.descripcion as moneda,c.descripcion as destino from promociones a left join monedas b on b.moneda=a.moneda left join destinos c on c.destino=a.destino
						where a.zona=".$zona;
				}
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia ->fetchAll();
				// var_dump($resultado);
				if(count($resultado)){
					//cargar el objeto
					foreach ($resultado as $fila) {
						$promociones[] = new Promociones($fila['promocion'],$fila['leyenda'],$fila['ruta'],$fila['precio'],$fila['imagen'],$fila['intervalo'],$fila['moneda'],$fila['destino'],$fila['detalles']);
					}

				}else{
					//print("no hay resultado");
				}

			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();
			}
		}else{
			// echo "no hay conexion";
		}
		//crear el html
		//echo count($promociones);
		return self::createPromocion($promociones);		
	}

	public static function obtener_zonas($conexion){
		$promociones = array();

		if(isset($conexion)){
			try {
				include_once "Promociones.inc.php";
				$sql = "select b.descripcion as zona from promociones a inner join zonas b on b.zona=a.zona  group by a.zona";			
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia ->fetchAll();
				// var_dump($resultado);
				var_dump($resultado);

				if(count($resultado)){
					//cargar el objeto
					foreach ($resultado as $fila) {
						
					}

				}else{
					print("no hay resultado");
				}

			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();
			}
		}else{
			// echo "no hay conexion";
		}
		//crear el html
		//echo count($promociones);
		//return self::createPromocion($promociones);
	}


}

?>