<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapromociones = array();	
	$tdatapromociones[".truncateText"] = true;
	$tdatapromociones[".NumberOfChars"] = 80; 
	$tdatapromociones[".ShortName"] = "promociones";
	$tdatapromociones[".OwnerID"] = "";
	$tdatapromociones[".OriginalTable"] = "promociones";

//	field labels
$fieldLabelspromociones = array();
$fieldToolTipspromociones = array();
$pageTitlespromociones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspromociones["Spanish"] = array();
	$fieldToolTipspromociones["Spanish"] = array();
	$pageTitlespromociones["Spanish"] = array();
	$fieldLabelspromociones["Spanish"]["promocion"] = "Promocion";
	$fieldToolTipspromociones["Spanish"]["promocion"] = "";
	$fieldLabelspromociones["Spanish"]["ruta"] = "Ruta";
	$fieldToolTipspromociones["Spanish"]["ruta"] = "";
	$fieldLabelspromociones["Spanish"]["leyenda"] = "Leyenda";
	$fieldToolTipspromociones["Spanish"]["leyenda"] = "";
	$fieldLabelspromociones["Spanish"]["precio"] = "Precio";
	$fieldToolTipspromociones["Spanish"]["precio"] = "";
	$fieldLabelspromociones["Spanish"]["imagen"] = "Imagen";
	$fieldToolTipspromociones["Spanish"]["imagen"] = "";
	$fieldLabelspromociones["Spanish"]["intervalo"] = "Intervalo";
	$fieldToolTipspromociones["Spanish"]["intervalo"] = "";
	$fieldLabelspromociones["Spanish"]["moneda"] = "Moneda";
	$fieldToolTipspromociones["Spanish"]["moneda"] = "";
	$fieldLabelspromociones["Spanish"]["detalles"] = "Detalles";
	$fieldToolTipspromociones["Spanish"]["detalles"] = "";
	$fieldLabelspromociones["Spanish"]["destino"] = "Destino";
	$fieldToolTipspromociones["Spanish"]["destino"] = "";
	$fieldLabelspromociones["Spanish"]["zona"] = "Zona";
	$fieldToolTipspromociones["Spanish"]["zona"] = "";
	$fieldLabelspromociones["Spanish"]["estado"] = "Estado";
	$fieldToolTipspromociones["Spanish"]["estado"] = "";
	if (count($fieldToolTipspromociones["Spanish"]))
		$tdatapromociones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspromociones[""] = array();
	$fieldToolTipspromociones[""] = array();
	$pageTitlespromociones[""] = array();
	$fieldLabelspromociones[""]["imagen"] = "Imagen";
	$fieldToolTipspromociones[""]["imagen"] = "";
	$fieldLabelspromociones[""]["intervalo"] = "Intervalo";
	$fieldToolTipspromociones[""]["intervalo"] = "";
	$fieldLabelspromociones[""]["moneda"] = "Moneda";
	$fieldToolTipspromociones[""]["moneda"] = "";
	$fieldLabelspromociones[""]["detalles"] = "Detalles";
	$fieldToolTipspromociones[""]["detalles"] = "";
	$fieldLabelspromociones[""]["destino"] = "Destino";
	$fieldToolTipspromociones[""]["destino"] = "";
	$fieldLabelspromociones[""]["zona"] = "Zona";
	$fieldToolTipspromociones[""]["zona"] = "";
	$fieldLabelspromociones[""]["estado"] = "Estado";
	$fieldToolTipspromociones[""]["estado"] = "";
	if (count($fieldToolTipspromociones[""]))
		$tdatapromociones[".isUseToolTips"] = true;
}
	
	
	$tdatapromociones[".NCSearch"] = true;



$tdatapromociones[".shortTableName"] = "promociones";
$tdatapromociones[".nSecOptions"] = 0;
$tdatapromociones[".recsPerRowList"] = 1;
$tdatapromociones[".recsPerRowPrint"] = 1;
$tdatapromociones[".mainTableOwnerID"] = "";
$tdatapromociones[".moveNext"] = 1;
$tdatapromociones[".entityType"] = 0;

$tdatapromociones[".strOriginalTableName"] = "promociones";




$tdatapromociones[".showAddInPopup"] = false;

$tdatapromociones[".showEditInPopup"] = false;

$tdatapromociones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapromociones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapromociones[".fieldsForRegister"] = array();

$tdatapromociones[".listAjax"] = false;

	$tdatapromociones[".audit"] = false;

	$tdatapromociones[".locking"] = false;

$tdatapromociones[".edit"] = true;
$tdatapromociones[".afterEditAction"] = 1;
$tdatapromociones[".closePopupAfterEdit"] = 1;
$tdatapromociones[".afterEditActionDetTable"] = "";

$tdatapromociones[".add"] = true;
$tdatapromociones[".afterAddAction"] = 1;
$tdatapromociones[".closePopupAfterAdd"] = 1;
$tdatapromociones[".afterAddActionDetTable"] = "";

$tdatapromociones[".list"] = true;

$tdatapromociones[".inlineEdit"] = true;
$tdatapromociones[".inlineAdd"] = true;
$tdatapromociones[".view"] = true;

$tdatapromociones[".import"] = true;

$tdatapromociones[".exportTo"] = true;

$tdatapromociones[".printFriendly"] = true;

$tdatapromociones[".delete"] = true;

$tdatapromociones[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapromociones[".searchSaving"] = false;
//

$tdatapromociones[".showSearchPanel"] = true;
		$tdatapromociones[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapromociones[".isUseAjaxSuggest"] = false;
else 
	$tdatapromociones[".isUseAjaxSuggest"] = true;

$tdatapromociones[".rowHighlite"] = true;



$tdatapromociones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapromociones[".isUseTimeForSearch"] = false;





$tdatapromociones[".allSearchFields"] = array();
$tdatapromociones[".filterFields"] = array();
$tdatapromociones[".requiredSearchFields"] = array();

$tdatapromociones[".allSearchFields"][] = "ruta";
	$tdatapromociones[".allSearchFields"][] = "promocion";
	$tdatapromociones[".allSearchFields"][] = "leyenda";
	$tdatapromociones[".allSearchFields"][] = "moneda";
	$tdatapromociones[".allSearchFields"][] = "precio";
	$tdatapromociones[".allSearchFields"][] = "detalles";
	$tdatapromociones[".allSearchFields"][] = "intervalo";
	$tdatapromociones[".allSearchFields"][] = "destino";
	$tdatapromociones[".allSearchFields"][] = "zona";
	$tdatapromociones[".allSearchFields"][] = "estado";
	

$tdatapromociones[".googleLikeFields"] = array();
$tdatapromociones[".googleLikeFields"][] = "promocion";
$tdatapromociones[".googleLikeFields"][] = "ruta";
$tdatapromociones[".googleLikeFields"][] = "leyenda";
$tdatapromociones[".googleLikeFields"][] = "precio";
$tdatapromociones[".googleLikeFields"][] = "intervalo";
$tdatapromociones[".googleLikeFields"][] = "moneda";
$tdatapromociones[".googleLikeFields"][] = "detalles";
$tdatapromociones[".googleLikeFields"][] = "destino";
$tdatapromociones[".googleLikeFields"][] = "zona";
$tdatapromociones[".googleLikeFields"][] = "estado";


$tdatapromociones[".advSearchFields"] = array();
$tdatapromociones[".advSearchFields"][] = "ruta";
$tdatapromociones[".advSearchFields"][] = "promocion";
$tdatapromociones[".advSearchFields"][] = "leyenda";
$tdatapromociones[".advSearchFields"][] = "moneda";
$tdatapromociones[".advSearchFields"][] = "precio";
$tdatapromociones[".advSearchFields"][] = "detalles";
$tdatapromociones[".advSearchFields"][] = "intervalo";
$tdatapromociones[".advSearchFields"][] = "destino";
$tdatapromociones[".advSearchFields"][] = "zona";
$tdatapromociones[".advSearchFields"][] = "estado";

$tdatapromociones[".tableType"] = "list";

$tdatapromociones[".printerPageOrientation"] = 0;
$tdatapromociones[".nPrinterPageScale"] = 100;

$tdatapromociones[".nPrinterSplitRecords"] = 40;

$tdatapromociones[".nPrinterPDFSplitRecords"] = 40;



$tdatapromociones[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatapromociones[".pageSize"] = 20;

$tdatapromociones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapromociones[".strOrderBy"] = $tstrOrderBy;

$tdatapromociones[".orderindexes"] = array();

$tdatapromociones[".sqlHead"] = "SELECT promocion,  	ruta,  	leyenda,  	precio,  	imagen,  	intervalo,  	moneda,  	detalles,  	destino,  	zona,  	estado";
$tdatapromociones[".sqlFrom"] = "FROM promociones";
$tdatapromociones[".sqlWhereExpr"] = "";
$tdatapromociones[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapromociones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapromociones[".arrGroupsPerPage"] = $arrGPP;

$tdatapromociones[".highlightSearchResults"] = true;

$tableKeyspromociones = array();
$tableKeyspromociones[] = "promocion";
$tdatapromociones[".Keys"] = $tableKeyspromociones;

$tdatapromociones[".listFields"] = array();
$tdatapromociones[".listFields"][] = "imagen";
$tdatapromociones[".listFields"][] = "ruta";
$tdatapromociones[".listFields"][] = "promocion";
$tdatapromociones[".listFields"][] = "leyenda";
$tdatapromociones[".listFields"][] = "moneda";
$tdatapromociones[".listFields"][] = "precio";
$tdatapromociones[".listFields"][] = "detalles";
$tdatapromociones[".listFields"][] = "intervalo";
$tdatapromociones[".listFields"][] = "destino";
$tdatapromociones[".listFields"][] = "zona";
$tdatapromociones[".listFields"][] = "estado";

$tdatapromociones[".hideMobileList"] = array();


$tdatapromociones[".viewFields"] = array();
$tdatapromociones[".viewFields"][] = "imagen";
$tdatapromociones[".viewFields"][] = "ruta";
$tdatapromociones[".viewFields"][] = "promocion";
$tdatapromociones[".viewFields"][] = "leyenda";
$tdatapromociones[".viewFields"][] = "moneda";
$tdatapromociones[".viewFields"][] = "precio";
$tdatapromociones[".viewFields"][] = "detalles";
$tdatapromociones[".viewFields"][] = "intervalo";
$tdatapromociones[".viewFields"][] = "destino";
$tdatapromociones[".viewFields"][] = "zona";
$tdatapromociones[".viewFields"][] = "estado";

$tdatapromociones[".addFields"] = array();
$tdatapromociones[".addFields"][] = "imagen";
$tdatapromociones[".addFields"][] = "ruta";
$tdatapromociones[".addFields"][] = "leyenda";
$tdatapromociones[".addFields"][] = "moneda";
$tdatapromociones[".addFields"][] = "precio";
$tdatapromociones[".addFields"][] = "detalles";
$tdatapromociones[".addFields"][] = "intervalo";
$tdatapromociones[".addFields"][] = "destino";
$tdatapromociones[".addFields"][] = "zona";
$tdatapromociones[".addFields"][] = "estado";

$tdatapromociones[".masterListFields"] = array();
$tdatapromociones[".masterListFields"][] = "imagen";
$tdatapromociones[".masterListFields"][] = "ruta";
$tdatapromociones[".masterListFields"][] = "promocion";
$tdatapromociones[".masterListFields"][] = "leyenda";
$tdatapromociones[".masterListFields"][] = "moneda";
$tdatapromociones[".masterListFields"][] = "precio";
$tdatapromociones[".masterListFields"][] = "detalles";
$tdatapromociones[".masterListFields"][] = "intervalo";
$tdatapromociones[".masterListFields"][] = "destino";
$tdatapromociones[".masterListFields"][] = "zona";
$tdatapromociones[".masterListFields"][] = "estado";

$tdatapromociones[".inlineAddFields"] = array();
$tdatapromociones[".inlineAddFields"][] = "imagen";
$tdatapromociones[".inlineAddFields"][] = "ruta";
$tdatapromociones[".inlineAddFields"][] = "leyenda";
$tdatapromociones[".inlineAddFields"][] = "moneda";
$tdatapromociones[".inlineAddFields"][] = "precio";
$tdatapromociones[".inlineAddFields"][] = "detalles";
$tdatapromociones[".inlineAddFields"][] = "intervalo";
$tdatapromociones[".inlineAddFields"][] = "destino";
$tdatapromociones[".inlineAddFields"][] = "zona";
$tdatapromociones[".inlineAddFields"][] = "estado";

$tdatapromociones[".editFields"] = array();
$tdatapromociones[".editFields"][] = "imagen";
$tdatapromociones[".editFields"][] = "ruta";
$tdatapromociones[".editFields"][] = "leyenda";
$tdatapromociones[".editFields"][] = "moneda";
$tdatapromociones[".editFields"][] = "precio";
$tdatapromociones[".editFields"][] = "detalles";
$tdatapromociones[".editFields"][] = "intervalo";
$tdatapromociones[".editFields"][] = "destino";
$tdatapromociones[".editFields"][] = "zona";
$tdatapromociones[".editFields"][] = "estado";

$tdatapromociones[".inlineEditFields"] = array();
$tdatapromociones[".inlineEditFields"][] = "imagen";
$tdatapromociones[".inlineEditFields"][] = "ruta";
$tdatapromociones[".inlineEditFields"][] = "leyenda";
$tdatapromociones[".inlineEditFields"][] = "moneda";
$tdatapromociones[".inlineEditFields"][] = "precio";
$tdatapromociones[".inlineEditFields"][] = "detalles";
$tdatapromociones[".inlineEditFields"][] = "intervalo";
$tdatapromociones[".inlineEditFields"][] = "destino";
$tdatapromociones[".inlineEditFields"][] = "zona";
$tdatapromociones[".inlineEditFields"][] = "estado";

$tdatapromociones[".exportFields"] = array();
$tdatapromociones[".exportFields"][] = "imagen";
$tdatapromociones[".exportFields"][] = "ruta";
$tdatapromociones[".exportFields"][] = "promocion";
$tdatapromociones[".exportFields"][] = "leyenda";
$tdatapromociones[".exportFields"][] = "moneda";
$tdatapromociones[".exportFields"][] = "precio";
$tdatapromociones[".exportFields"][] = "detalles";
$tdatapromociones[".exportFields"][] = "intervalo";
$tdatapromociones[".exportFields"][] = "destino";
$tdatapromociones[".exportFields"][] = "zona";
$tdatapromociones[".exportFields"][] = "estado";

$tdatapromociones[".importFields"] = array();
$tdatapromociones[".importFields"][] = "promocion";
$tdatapromociones[".importFields"][] = "ruta";
$tdatapromociones[".importFields"][] = "leyenda";
$tdatapromociones[".importFields"][] = "precio";
$tdatapromociones[".importFields"][] = "imagen";
$tdatapromociones[".importFields"][] = "intervalo";
$tdatapromociones[".importFields"][] = "moneda";
$tdatapromociones[".importFields"][] = "detalles";
$tdatapromociones[".importFields"][] = "destino";
$tdatapromociones[".importFields"][] = "zona";
$tdatapromociones[".importFields"][] = "estado";

$tdatapromociones[".printFields"] = array();
$tdatapromociones[".printFields"][] = "imagen";
$tdatapromociones[".printFields"][] = "ruta";
$tdatapromociones[".printFields"][] = "promocion";
$tdatapromociones[".printFields"][] = "leyenda";
$tdatapromociones[".printFields"][] = "moneda";
$tdatapromociones[".printFields"][] = "precio";
$tdatapromociones[".printFields"][] = "detalles";
$tdatapromociones[".printFields"][] = "intervalo";
$tdatapromociones[".printFields"][] = "destino";
$tdatapromociones[".printFields"][] = "zona";
$tdatapromociones[".printFields"][] = "estado";

//	promocion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "promocion";
	$fdata["GoodName"] = "promocion";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","promocion"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "promocion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "promocion";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapromociones["promocion"] = $fdata;
//	ruta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ruta";
	$fdata["GoodName"] = "ruta";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","ruta"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ruta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ruta";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapromociones["ruta"] = $fdata;
//	leyenda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "leyenda";
	$fdata["GoodName"] = "leyenda";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","leyenda"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "leyenda"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leyenda";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapromociones["leyenda"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","precio"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "precio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "precio";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapromociones["precio"] = $fdata;
//	imagen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "imagen";
	$fdata["GoodName"] = "imagen";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","imagen"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "imagen"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagen";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "images/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatapromociones["imagen"] = $fdata;
//	intervalo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "intervalo";
	$fdata["GoodName"] = "intervalo";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","intervalo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "intervalo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "intervalo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapromociones["intervalo"] = $fdata;
//	moneda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "moneda";
	$fdata["GoodName"] = "moneda";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","moneda"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "moneda"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "moneda";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "monedas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "moneda";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";
	
		
	$edata["LookupOrderBy"] = "descripcion";
	
		$edata["LookupDesc"] = true;
	
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapromociones["moneda"] = $fdata;
//	detalles
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "detalles";
	$fdata["GoodName"] = "detalles";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","detalles"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "detalles"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detalles";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapromociones["detalles"] = $fdata;
//	destino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "destino";
	$fdata["GoodName"] = "destino";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","destino"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "destino"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "destino";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "destinos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "destino";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";
	
		
	$edata["LookupOrderBy"] = "destino";
	
		$edata["LookupDesc"] = true;
	
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapromociones["destino"] = $fdata;
//	zona
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "zona";
	$fdata["GoodName"] = "zona";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","zona"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "zona"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zona";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "zonas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "zona";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapromociones["zona"] = $fdata;
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","estado"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "estado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapromociones["estado"] = $fdata;

	
$tables_data["promociones"]=&$tdatapromociones;
$field_labels["promociones"] = &$fieldLabelspromociones;
$fieldToolTips["promociones"] = &$fieldToolTipspromociones;
$page_titles["promociones"] = &$pageTitlespromociones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["promociones"] = array();
//	detalles
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalles";
		$detailsParam["dOriginalTable"] = "detalles";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalles");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["promociones"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["promociones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["promociones"][$dIndex]["masterKeys"][]="promocion";

				$detailsTablesData["promociones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["promociones"][$dIndex]["detailKeys"][]="promocion";
//	sliders
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sliders";
		$detailsParam["dOriginalTable"] = "sliders";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sliders";
	$detailsParam["dCaptionTable"] = GetTableCaption("sliders");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["promociones"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["promociones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["promociones"][$dIndex]["masterKeys"][]="promocion";

				$detailsTablesData["promociones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["promociones"][$dIndex]["detailKeys"][]="promocion";
//	imagenes_promociones
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="imagenes_promociones";
		$detailsParam["dOriginalTable"] = "imagenes_promociones";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "imagenes_promociones";
	$detailsParam["dCaptionTable"] = GetTableCaption("imagenes_promociones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["promociones"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["promociones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["promociones"][$dIndex]["masterKeys"][]="promocion";

				$detailsTablesData["promociones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["promociones"][$dIndex]["detailKeys"][]="promocion";
	
// tables which are master tables for current table (detail)
$masterTablesData["promociones"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_promociones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "promocion,  	ruta,  	leyenda,  	precio,  	imagen,  	intervalo,  	moneda,  	detalles,  	destino,  	zona,  	estado";
$proto0["m_strFrom"] = "FROM promociones";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
						$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "promocion",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto5["m_sql"] = "promocion";
$proto5["m_srcTableName"] = "promociones";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ruta",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto7["m_sql"] = "ruta";
$proto7["m_srcTableName"] = "promociones";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "leyenda",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto9["m_sql"] = "leyenda";
$proto9["m_srcTableName"] = "promociones";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto11["m_sql"] = "precio";
$proto11["m_srcTableName"] = "promociones";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "imagen",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto13["m_sql"] = "imagen";
$proto13["m_srcTableName"] = "promociones";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "intervalo",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto15["m_sql"] = "intervalo";
$proto15["m_srcTableName"] = "promociones";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "moneda",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto17["m_sql"] = "moneda";
$proto17["m_srcTableName"] = "promociones";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "detalles",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto19["m_sql"] = "detalles";
$proto19["m_srcTableName"] = "promociones";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "destino",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto21["m_sql"] = "destino";
$proto21["m_srcTableName"] = "promociones";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "zona",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto23["m_sql"] = "zona";
$proto23["m_srcTableName"] = "promociones";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto25["m_sql"] = "estado";
$proto25["m_srcTableName"] = "promociones";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "promociones";
$proto28["m_srcTableName"] = "promociones";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "promocion";
$proto28["m_columns"][] = "ruta";
$proto28["m_columns"][] = "leyenda";
$proto28["m_columns"][] = "precio";
$proto28["m_columns"][] = "imagen";
$proto28["m_columns"][] = "intervalo";
$proto28["m_columns"][] = "moneda";
$proto28["m_columns"][] = "detalles";
$proto28["m_columns"][] = "destino";
$proto28["m_columns"][] = "zona";
$proto28["m_columns"][] = "estado";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "promociones";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "promociones";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="promociones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_promociones = createSqlQuery_promociones();


	
											
	
$tdatapromociones[".sqlquery"] = $queryData_promociones;

$tableEvents["promociones"] = new eventsBase;
$tdatapromociones[".hasEvents"] = false;

?>