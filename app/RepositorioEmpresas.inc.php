<?php
	class RepositorioEmpresas{

		public static function obtener_info_empresa($conexion){
			$empresa = array();

			if(isset($conexion)){
				try {
					include_once "Empresas.inc.php";

					$sql = "select empresa, telefonos, direccion, correo, correo2, leyenda from empresas where empresa=1";
					$sentencia = $conexion -> prepare($sql);
					$sentencia -> execute();

					$empresas = $sentencia -> fetchAll();
					//var_dump($empresas);
					if(count($empresas)){
						foreach ($empresas as $key => $fila) {
							$empresa[] = new Empresas($fila['empresa'],$fila['direccion'],$fila['telefonos'],$fila['correo'],$fila['correo2'],$fila['leyenda']);
						}
					}
				} catch (PDOException $e) {
					print "ERROR ".$e -> getMessage();
				}
			}else{
				print "<strom>no hay conexion.</strom>";
			}
			return $empresa;
		}

		private function create_info_html_encabezado_default(){
			$html = '';
			$html = '			<a href="#" class="dato">
				<i class="fa fa-phone wow pulse" data-wow-iteration="infinite" data-wow-duration="1500ms"> (021)666.666/6</i>
			</a>
			<a href="#" class="dato"><i i class="fa fa-envelope-o" aria-hidden="true"> empresa@empresa.com.py</i></a>';

			return $html;
		}

		public static function create_info_html_encabezado($empresa){
				$html ='';
				foreach ($empresa as $key => $value) {
					$html .= '			<a href="#" class="dato">
						<i class="fa fa-phone wow pulse" data-wow-iteration="infinite" data-wow-duration="1500ms"> '.$value->obtener_telefono().'</i>
					</a>
					<a href="#" class="dato">
						<i class="fa fa-envelope-o wow pulse" aria-hidden="true" data-wow-iteration="infinite" data-wow-duration="1500ms"> '.$value->obtener_correo().'</i>
					</a>';
				}
				return $html;
			
		}
		private function create_info_html_footer($empresa){
			$html = '				<h3>Contacto Info</h3>
				<ul>';		
			foreach ($empresa as $key => $value) {
				$html .= '					<li>'.$value->obtener_direccion().'</li> 
					<li>Telefono: '.$value->obtener_telefono().'</li>
					<li><a href="mailto:'.$value->obtener_correo().'"> '.$value->obtener_correo().'</a></li>
					<li><a href="mailto:'.$value->obtener_correo2().'"> '.$value->obtener_correo2().'</a></li>
					<li>Asunción - Paraguay</li>';
			}
			$html.='				</ul>';

			return $html;
		}
		private function create_info_html_footer_default(){
			$html = '				<h3>Contacto Info</h3>
				<ul>
					<li>Direccion</li> 
					<li>Telefono: 666.666/6</li>
					<li><a href="mailto:empresa@empresa.com.py"> empresa@empresa.com.py</a></li>
					<li>Asunción - Paraguay</li>
				</ul>';
			return $html;
		}
		public static function create_info($empresa,$tipo){
			$html = '';
				switch ($tipo) {
					case 'encabezado':
						if(count($empresa)){
							return self::create_info_html_encabezado($empresa);
						}else{
							return self::create_info_html_encabezado_default();
						}
					break;
					case 'footer':
						if(count($empresa)){
							return self::create_info_html_footer($empresa);
						}else{
							return self::create_info_html_footer_default();
						}
					case 'leyenda':
						return self::create_leyenda($empresa);		
				default:
						return $html = '<strom> no hay datos</strom>';
					break;
			}
		}
		public static function create_leyenda($empresa){
			$html="";
			$html.='<p>';
			foreach ($empresa as $key => $value) {
				$html.=$value -> obtener_leyenda();
			}
			$html.='<p>';

			return $html;
		}
	}
?>