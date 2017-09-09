<?php
class RepositorioZonas{
	public static function obtener_zonas_promociones($conexion){
		$zonas = array();

		if(isset($conexion)){
			try {
				include_once "Zonas.inc.php";
				$sql = "select b.zona as zona, 
						b.descripcion as descripcion 
						from promociones a 
						inner join zonas b on b.zona=a.zona 
						group by a.zona";			
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();

				$resultado = $sentencia ->fetchAll();
				// var_dump($resultado);
				//var_dump($resultado);

				if(count($resultado)){
					//cargar el objeto
					foreach ($resultado as $fila) {
						$zonas[] = new Zonas($fila['zona'],$fila['descripcion']);			
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
		return self::createListaZona($zonas);		
	}

	public static function createListaZona($zonas){
		$html = '
		<div class="destinos2">
    		<ul class="nav nav-list simplefilter">
    			<li class="active" data-divague="0">Todos</li>
    			';

		foreach ($zonas as $key => $value) {
			$html .='    			<li data-divague="'.$value->obtener_zona().'">'.$value -> obtener_descripcion().'</li>';
		}
		$html.="    		</ul>
    	</div>";

		return $html;
	}
}

?>