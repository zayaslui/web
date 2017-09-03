<?php
function DisplayMasterTableInfo_promociones($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "promociones";
	$xt->eventsObject = getEventObject($tName);
	
	include_once('classes/listpage.php');
	include_once('classes/listpage_simple.php');
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "detalles")
	{
		$keysAssoc["promocion"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("promocion", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("promociones","promocion").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "sliders")
	{
		$keysAssoc["promocion"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("promocion", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("promociones","promocion").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "imagenes_promociones")
	{
		$keysAssoc["promocion"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("promocion", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("promociones","promocion").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["promocion"]));
	
	$xt->assign("promocion_mastervalue", $viewControls->showDBValue("promocion", $data, $keylink));
	$format = $settings->getViewFormat("promocion");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("promocion")))
		$class = ' rnr-field-number';
		
	$xt->assign("promocion_class", $class); // add class for field header as field value
	$xt->assign("ruta_mastervalue", $viewControls->showDBValue("ruta", $data, $keylink));
	$format = $settings->getViewFormat("ruta");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ruta")))
		$class = ' rnr-field-number';
		
	$xt->assign("ruta_class", $class); // add class for field header as field value
	$xt->assign("leyenda_mastervalue", $viewControls->showDBValue("leyenda", $data, $keylink));
	$format = $settings->getViewFormat("leyenda");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("leyenda")))
		$class = ' rnr-field-number';
		
	$xt->assign("leyenda_class", $class); // add class for field header as field value
	$xt->assign("precio_mastervalue", $viewControls->showDBValue("precio", $data, $keylink));
	$format = $settings->getViewFormat("precio");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("precio")))
		$class = ' rnr-field-number';
		
	$xt->assign("precio_class", $class); // add class for field header as field value
	$xt->assign("imagen_mastervalue", $viewControls->showDBValue("imagen", $data, $keylink));
	$format = $settings->getViewFormat("imagen");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("imagen")))
		$class = ' rnr-field-number';
		
	$xt->assign("imagen_class", $class); // add class for field header as field value
	$xt->assign("intervalo_mastervalue", $viewControls->showDBValue("intervalo", $data, $keylink));
	$format = $settings->getViewFormat("intervalo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("intervalo")))
		$class = ' rnr-field-number';
		
	$xt->assign("intervalo_class", $class); // add class for field header as field value
	$xt->assign("moneda_mastervalue", $viewControls->showDBValue("moneda", $data, $keylink));
	$format = $settings->getViewFormat("moneda");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("moneda")))
		$class = ' rnr-field-number';
		
	$xt->assign("moneda_class", $class); // add class for field header as field value
	$xt->assign("detalles_mastervalue", $viewControls->showDBValue("detalles", $data, $keylink));
	$format = $settings->getViewFormat("detalles");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("detalles")))
		$class = ' rnr-field-number';
		
	$xt->assign("detalles_class", $class); // add class for field header as field value
	$xt->assign("destino_mastervalue", $viewControls->showDBValue("destino", $data, $keylink));
	$format = $settings->getViewFormat("destino");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("destino")))
		$class = ' rnr-field-number';
		
	$xt->assign("destino_class", $class); // add class for field header as field value
	$xt->assign("zona_mastervalue", $viewControls->showDBValue("zona", $data, $keylink));
	$format = $settings->getViewFormat("zona");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("zona")))
		$class = ' rnr-field-number';
		
	$xt->assign("zona_class", $class); // add class for field header as field value
	$xt->assign("estado_mastervalue", $viewControls->showDBValue("estado", $data, $keylink));
	$format = $settings->getViewFormat("estado");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("estado")))
		$class = ' rnr-field-number';
		
	$xt->assign("estado_class", $class); // add class for field header as field value

	$layout = GetPageLayout("promociones", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("promociones", "masterlist"));
}

?>