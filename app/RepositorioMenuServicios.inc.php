<?php
	class RepositorioMenuServicios{

		public static function obtener_menu_servicios($conexion){
			$servicios = array();

			if(isset($conexion)){
				try {
					include_once "MenuServicios.inc.php";
					/*acomodar las columnas al objeto que no cohincide*/
					$sql = "select *from menu_servicios";
					$sentencia = $conexion -> prepare($sql);
					$sentencia -> execute();

					$resultado = $sentencia -> fetchAll();					

					if(count($resultado)){
						foreach ($resultado as $key => $fila) {
							$servicios [] = new MenuServicios($fila['menu_servicio'],$fila['imagen'],$fila['link'],$fila['titulo'],$fila['contenido']);
						}
					}else{
						print "no hay resultados";
					}

				} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();					
				}
			}else{
				print "no hay conexion";
			}
		return self::create_menu_servicios($servicios);
		}

		public static function consulta($conexion){
			$servicios = array();

			if(isset($conexion)){
				try {
					
					include_once "MenuServicios.inc.php";
					/*acomodar las columnas al objeto que no cohincide*/
					$sql = "select *from zonas";
					$sentencia = $conexion -> prepare($sql);
					$sentencia -> execute();

					$resultado = $sentencia -> fetchAll();					

					if(count($resultado)){
						print "hay resultado";
					}else{
						print "no hay resultados";
					}

				} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();					
				}
			}else{
				print "no hay conexion";
			}
		return $resultado;
		}


		public static function create_menu_servicios($servicios){
			$html = '';

			$html .= '<div id="tit_" class="container">
						<h2 class="title mt0">
							servicios
						</h2>	
					</div>
					<div class="container color_grid contenedor_grid">
					<section id="grid" class="grid clearfix container-fluid">';
			foreach ($servicios as $key => $value) {
				$img = 'admin/'.str_replace('\/','/',str_replace('"','',explode(",", explode(":", $value -> obtener_imagen())[1])[0]));
				$html .= '
				<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z" class="wow fadeInLeft col-md-3 col-xs-12 col-sm-12" data-row-offset="100">
						<figure>
								<img src="'.$img.'">
							<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M180,160C180,160,0,218,0,218C0,218,0,0,0,0C0,0,180,0,180,0C180,0,180,160,180,160"></path><desc>Created with Snap</desc><defs></defs></svg>
							<figcaption>
								<h2>'.$value -> obtener_titulo().'</h2>
								<p>'.$value -> obtener_contenido().'</p>

							</figcaption>
						</figure>
				</a>';
			}
			$html .='	</section>
					</div>	';

		return $html;
		}

	}

?>