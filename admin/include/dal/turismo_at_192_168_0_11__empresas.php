<?php
$dalTableempresas = array();
$dalTableempresas["empresa"] = array("type"=>3,"varname"=>"empresa");
$dalTableempresas["direccion"] = array("type"=>200,"varname"=>"direccion");
$dalTableempresas["telefonos"] = array("type"=>200,"varname"=>"telefonos");
$dalTableempresas["correo"] = array("type"=>200,"varname"=>"correo");
$dalTableempresas["correo2"] = array("type"=>200,"varname"=>"correo2");
$dalTableempresas["leyenda"] = array("type"=>200,"varname"=>"leyenda");
	$dalTableempresas["empresa"]["key"]=true;

$dal_info["turismo_at_192_168_0_11__empresas"] = &$dalTableempresas;
?>