<?php

class RepositorioImagenesPromociones{

	public static function obtener_imagen_promocion($conexion,$promocion){
		$imagenPromocion = array();

		if(isset($conexion)){
			try {
				include_once "ImagenesPromociones.inc.php";

				$sql = "select *from imagenes_promociones where imagen_promocion=".$promocion;
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia -> fetchAll();

				if(count($resultado)){
					foreach ($resultado as $key => $fila) {
						$imagenPromocion[] = new ImagenesPromociones($fila['imagen_promocion'],$fila['promocion'],$fila['imagen'],$fila['descripcion']);
					}
				}

			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();
			}
		}else{
			print "No hay conexion";
		}
		return self::create_imagen_promocion($imagenPromocion);
	}	

	private function create_imagen_promocion($imagenPromocion){
		$html ="";
		foreach ($imagenPromocion as $key => $value) {
			$html.= '	<div class="row">
							<div class="col-md-12">
								<center>
									<img src="data:image/jpg;base64,'.base64_encode($value->obtener_imagen()).'" alt="" class="img-responsive">			
								</center>
							</div>
						</div>';
		}
		return $html;
	}
}

?>