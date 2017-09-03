<?php
$dalTablepromociones = array();
$dalTablepromociones["promocion"] = array("type"=>3,"varname"=>"promocion");
$dalTablepromociones["ruta"] = array("type"=>200,"varname"=>"ruta");
$dalTablepromociones["leyenda"] = array("type"=>200,"varname"=>"leyenda");
$dalTablepromociones["precio"] = array("type"=>200,"varname"=>"precio");
$dalTablepromociones["imagen"] = array("type"=>128,"varname"=>"imagen");
$dalTablepromociones["intervalo"] = array("type"=>200,"varname"=>"intervalo");
$dalTablepromociones["moneda"] = array("type"=>3,"varname"=>"moneda");
$dalTablepromociones["detalles"] = array("type"=>200,"varname"=>"detalles");
$dalTablepromociones["destino"] = array("type"=>3,"varname"=>"destino");
$dalTablepromociones["zona"] = array("type"=>3,"varname"=>"zona");
$dalTablepromociones["estado"] = array("type"=>200,"varname"=>"estado");
	$dalTablepromociones["promocion"]["key"]=true;

$dal_info["turismo_at_192_168_0_11__promociones"] = &$dalTablepromociones;
?>