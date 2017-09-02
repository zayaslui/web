<?php
class RepositorioSliders{

	public static function obtener_todos($conexion){
		$slider =array();
		if(isset($conexion)){
			try {
				include_once "Sliders.inc.php";

				$sql = "select *from sliders";
				echo $sql;
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				if(count($resultado)){
					foreach ($variable as $fila) {
						$sliders[] = new Sliders($fila['slider'],$fila['promocion'],$fila['imagen'],$fila['clase']);
					}
				}
			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();
			}
		}else{
			print("No hay conexion");
		}
		return $sliders;
	}

	public static function obtener_slider_promociones($conexion,$promocion){
	$sliders = array();

		if(isset($conexion)){
			try {
				include_once "Sliders.inc.php";

				$sql = "select *from sliders where promocion = ".$promocion;
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				if(count($resultado)){
					foreach ($resultado as $fila) {
						$sliders[] = new Sliders($fila['slider'],$fila['promocion'],$fila['imagen'],$fila['clase']);
					}
				}else{
					return self::not_found_slider();
				}

			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();
			}
		}else{
			print("No hay resultados");
		}
	return self::create_slider($sliders);
	}

	//crear imagen not found
	private function not_found_slider(){
		$html = '';
		$html = '<canvas id="canv" class="slider_not_found img-responsive"></canvas>';
		return $html;
	}

	private function create_slider($result){
		$html = "";
		$contador = 0;
		$html.='<div id="slider-wrapper">
 					<div id="layerslider" class="layerslider" style="width: 1200px; height: 900px;">';
		foreach ($result as $key => $value) {
			//echo $value -> obtener_slider();
			$html.='<div class="ls-slide" data-ls="'.$value->obtener_clase().'">
							<img src="data:image/jpg;base64,'.base64_encode($value->obtener_imagen()).'" class="ls-bg" alt="Slide background"/>
						</div>';
			$contador++;
		}
		$html.='					</div>
				</div><script>
			$(document).ready(
				function(){
					if($("#layerslider")){
						$("#layerslider").layerSlider({
							pauseOnHover: false,
							skinsPath: "skins/"
						});							
					}				
			});

			</script>';

		return $html;
	}
}


?>