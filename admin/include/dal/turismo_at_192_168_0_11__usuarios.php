<?php
$dalTableusuarios = array();
$dalTableusuarios["usuario"] = array("type"=>3,"varname"=>"usuario");
$dalTableusuarios["nick"] = array("type"=>200,"varname"=>"nick");
$dalTableusuarios["password"] = array("type"=>200,"varname"=>"password");
$dalTableusuarios["nombre"] = array("type"=>200,"varname"=>"nombre");
	$dalTableusuarios["usuario"]["key"]=true;

$dal_info["turismo_at_192_168_0_11__usuarios"] = &$dalTableusuarios;
?>