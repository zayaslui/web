<?php
class RepositorioGaleria{
	
	public static function obtener_galeria($conexion){

		$galeria = array();
		
		if(isset($conexion)){
			try {
				include_once "Galerias.inc.php";

				$sql = "select galeria, imagen, zona, titulo from galerias where zona is not null";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia -> fetchAll();
				
				if(count($resultado)){
					foreach ($resultado as $key => $fila) {
						$galeria[] = new Galerias($fila['galeria'],$fila['imagen'],$fila['zona'],$fila['titulo']);
					}
					//echo var_dump($galeria);
				}else{
					//print "no hay resultados";
					return self::not_found_img();
				}
			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();				
			}
		}else{
			print "no hay conexion";
		}
		return self::create_contenedor_imagenes($galeria);
	}
	public static function not_found_img(){
		$html = '';
		$html .= '<div class="no_found">
					<div class="alert alert-danger " role="alert">
						<strong>Atención</strong> no se ha cargado imagenes en la galeria, 
	  					<a href="/turismo/admin/galerias_list.php" target="blank_" class="alert-link">diríjase aquí para agregar</a>
					</div>
				</div>';
		return $html;
	}
	public static function create_contenedor_imagenes($galeria){
		$html='			<div class="filtr-container">';
		foreach ($galeria as $key => $value) {

			$href = str_replace('\/','/',str_replace('"','',explode(",", explode(":", $value -> obtener_imagen())[1])[0]));

			$html.='
				<div class="col-md-4 col-sm-4 filtr-item" data-category="'.$value->obtener_zona().'" data-sort="Busy streets">
					<div class="agileits-img">
						<a href="admin/'.$href.'" target="blank" class="swipebox" title="'.$value->obtener_titulo().'">
							<img class="img-responsive" src="admin/'.$href.'" alt=""  /> 
						</a> 
					</div>
				</div>';

		}
		$html.='
			</div>';

		return $html;

	}
	
	public static function obtener_galeria_zona_disponibles($conexion){
		$galeria = array();
		if(isset($conexion)){
			try {
				include_once "Galerias.inc.php";
				/*acomodar las columnas al objeto que no cohincide*/
				$sql = "select b.zona as zona, a.descripcion as nombre_zona, b.imagen as imagen, titulo 
						from zonas a 
						inner join galerias b on b.zona=a.zona group by nombre_zona";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia -> fetchAll();

				if(count($resultado)){
					foreach ($resultado as $key => $fila) {
						$galeria[] = new Galerias($fila['zona']/*galeria*/,$fila['imagen']/*imagen*/,$fila['nombre_zona']/*zona*/,$fila['titulo']);
					}
				}else{
					//print "no hay resultados";
					return self::not_found_img_with_zona();
				}
			} catch (PDOException $e) {
				print "ERROR ".$e -> getMessage();				
			}
		}else{
			print "no hay conexion";
		}
		return self::obtener_lista_html($galeria);
	}
	public static function not_found_img_with_zona(){
		$html = '';
		$html .= '<div class="no_found">
					<div class="alert alert-danger " role="alert">
						<strong>Atención</strong> No se encuentra ninga imagen vilculada con alguna zona, 
	  					<a href="/turismo/admin/galerias_list.php" target="blank_" class="alert-link">diríjase aquí para agregar</a>
					</div>
				</div>';
		return $html;
	}
	public static function obtener_lista_html($galerias){
		$html='';
		$html.='
			<ul class="simplefilter">
				<li class="active" data-filter="all">Todos</li>';
		foreach ($galerias as $key => $value) {
			$html.='<li data-filter="'.$value->obtener_galeria().'">'.$value->obtener_zona().'</li>';
		}
		$html.='</ul>';
		return $html;
	}

}

?>