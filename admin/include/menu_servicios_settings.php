<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamenu_servicios = array();	
	$tdatamenu_servicios[".truncateText"] = true;
	$tdatamenu_servicios[".NumberOfChars"] = 80; 
	$tdatamenu_servicios[".ShortName"] = "menu_servicios";
	$tdatamenu_servicios[".OwnerID"] = "";
	$tdatamenu_servicios[".OriginalTable"] = "menu_servicios";

//	field labels
$fieldLabelsmenu_servicios = array();
$fieldToolTipsmenu_servicios = array();
$pageTitlesmenu_servicios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmenu_servicios["Spanish"] = array();
	$fieldToolTipsmenu_servicios["Spanish"] = array();
	$pageTitlesmenu_servicios["Spanish"] = array();
	$fieldLabelsmenu_servicios["Spanish"]["menu_servicio"] = "Menu Servicio";
	$fieldToolTipsmenu_servicios["Spanish"]["menu_servicio"] = "";
	$fieldLabelsmenu_servicios["Spanish"]["imagen"] = "Imagen";
	$fieldToolTipsmenu_servicios["Spanish"]["imagen"] = "";
	$fieldLabelsmenu_servicios["Spanish"]["link"] = "Link";
	$fieldToolTipsmenu_servicios["Spanish"]["link"] = "";
	$fieldLabelsmenu_servicios["Spanish"]["titulo"] = "Titulo";
	$fieldToolTipsmenu_servicios["Spanish"]["titulo"] = "";
	$fieldLabelsmenu_servicios["Spanish"]["contenido"] = "Contenido";
	$fieldToolTipsmenu_servicios["Spanish"]["contenido"] = "";
	if (count($fieldToolTipsmenu_servicios["Spanish"]))
		$tdatamenu_servicios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmenu_servicios[""] = array();
	$fieldToolTipsmenu_servicios[""] = array();
	$pageTitlesmenu_servicios[""] = array();
	$fieldLabelsmenu_servicios[""]["menu_servicio"] = "Menu Servicio";
	$fieldToolTipsmenu_servicios[""]["menu_servicio"] = "";
	$fieldLabelsmenu_servicios[""]["imagen"] = "Imagen";
	$fieldToolTipsmenu_servicios[""]["imagen"] = "";
	$fieldLabelsmenu_servicios[""]["link"] = "Link";
	$fieldToolTipsmenu_servicios[""]["link"] = "";
	$fieldLabelsmenu_servicios[""]["titulo"] = "Titulo";
	$fieldToolTipsmenu_servicios[""]["titulo"] = "";
	$fieldLabelsmenu_servicios[""]["contenido"] = "Contenido";
	$fieldToolTipsmenu_servicios[""]["contenido"] = "";
	if (count($fieldToolTipsmenu_servicios[""]))
		$tdatamenu_servicios[".isUseToolTips"] = true;
}
	
	
	$tdatamenu_servicios[".NCSearch"] = true;



$tdatamenu_servicios[".shortTableName"] = "menu_servicios";
$tdatamenu_servicios[".nSecOptions"] = 0;
$tdatamenu_servicios[".recsPerRowList"] = 1;
$tdatamenu_servicios[".recsPerRowPrint"] = 1;
$tdatamenu_servicios[".mainTableOwnerID"] = "";
$tdatamenu_servicios[".moveNext"] = 1;
$tdatamenu_servicios[".entityType"] = 0;

$tdatamenu_servicios[".strOriginalTableName"] = "menu_servicios";




$tdatamenu_servicios[".showAddInPopup"] = false;

$tdatamenu_servicios[".showEditInPopup"] = false;

$tdatamenu_servicios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamenu_servicios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamenu_servicios[".fieldsForRegister"] = array();

$tdatamenu_servicios[".listAjax"] = false;

	$tdatamenu_servicios[".audit"] = false;

	$tdatamenu_servicios[".locking"] = false;

$tdatamenu_servicios[".edit"] = true;
$tdatamenu_servicios[".afterEditAction"] = 1;
$tdatamenu_servicios[".closePopupAfterEdit"] = 1;
$tdatamenu_servicios[".afterEditActionDetTable"] = "";

$tdatamenu_servicios[".add"] = true;
$tdatamenu_servicios[".afterAddAction"] = 1;
$tdatamenu_servicios[".closePopupAfterAdd"] = 1;
$tdatamenu_servicios[".afterAddActionDetTable"] = "";

$tdatamenu_servicios[".list"] = true;

$tdatamenu_servicios[".inlineEdit"] = true;
$tdatamenu_servicios[".inlineAdd"] = true;
$tdatamenu_servicios[".view"] = true;

$tdatamenu_servicios[".import"] = true;

$tdatamenu_servicios[".exportTo"] = true;

$tdatamenu_servicios[".printFriendly"] = true;

$tdatamenu_servicios[".delete"] = true;

$tdatamenu_servicios[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamenu_servicios[".searchSaving"] = false;
//

$tdatamenu_servicios[".showSearchPanel"] = true;
		$tdatamenu_servicios[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamenu_servicios[".isUseAjaxSuggest"] = false;
else 
	$tdatamenu_servicios[".isUseAjaxSuggest"] = true;

$tdatamenu_servicios[".rowHighlite"] = true;



$tdatamenu_servicios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamenu_servicios[".isUseTimeForSearch"] = false;





$tdatamenu_servicios[".allSearchFields"] = array();
$tdatamenu_servicios[".filterFields"] = array();
$tdatamenu_servicios[".requiredSearchFields"] = array();

$tdatamenu_servicios[".allSearchFields"][] = "menu_servicio";
	$tdatamenu_servicios[".allSearchFields"][] = "imagen";
	$tdatamenu_servicios[".allSearchFields"][] = "link";
	$tdatamenu_servicios[".allSearchFields"][] = "titulo";
	$tdatamenu_servicios[".allSearchFields"][] = "contenido";
	

$tdatamenu_servicios[".googleLikeFields"] = array();
$tdatamenu_servicios[".googleLikeFields"][] = "menu_servicio";
$tdatamenu_servicios[".googleLikeFields"][] = "imagen";
$tdatamenu_servicios[".googleLikeFields"][] = "link";
$tdatamenu_servicios[".googleLikeFields"][] = "titulo";
$tdatamenu_servicios[".googleLikeFields"][] = "contenido";


$tdatamenu_servicios[".advSearchFields"] = array();
$tdatamenu_servicios[".advSearchFields"][] = "menu_servicio";
$tdatamenu_servicios[".advSearchFields"][] = "imagen";
$tdatamenu_servicios[".advSearchFields"][] = "link";
$tdatamenu_servicios[".advSearchFields"][] = "titulo";
$tdatamenu_servicios[".advSearchFields"][] = "contenido";

$tdatamenu_servicios[".tableType"] = "list";

$tdatamenu_servicios[".printerPageOrientation"] = 0;
$tdatamenu_servicios[".nPrinterPageScale"] = 100;

$tdatamenu_servicios[".nPrinterSplitRecords"] = 40;

$tdatamenu_servicios[".nPrinterPDFSplitRecords"] = 40;



$tdatamenu_servicios[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatamenu_servicios[".pageSize"] = 20;

$tdatamenu_servicios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamenu_servicios[".strOrderBy"] = $tstrOrderBy;

$tdatamenu_servicios[".orderindexes"] = array();

$tdatamenu_servicios[".sqlHead"] = "SELECT menu_servicio,  	imagen,  	link,  	titulo,  	contenido";
$tdatamenu_servicios[".sqlFrom"] = "FROM menu_servicios";
$tdatamenu_servicios[".sqlWhereExpr"] = "";
$tdatamenu_servicios[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamenu_servicios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamenu_servicios[".arrGroupsPerPage"] = $arrGPP;

$tdatamenu_servicios[".highlightSearchResults"] = true;

$tableKeysmenu_servicios = array();
$tableKeysmenu_servicios[] = "menu_servicio";
$tdatamenu_servicios[".Keys"] = $tableKeysmenu_servicios;

$tdatamenu_servicios[".listFields"] = array();
$tdatamenu_servicios[".listFields"][] = "menu_servicio";
$tdatamenu_servicios[".listFields"][] = "imagen";
$tdatamenu_servicios[".listFields"][] = "link";
$tdatamenu_servicios[".listFields"][] = "titulo";
$tdatamenu_servicios[".listFields"][] = "contenido";

$tdatamenu_servicios[".hideMobileList"] = array();


$tdatamenu_servicios[".viewFields"] = array();
$tdatamenu_servicios[".viewFields"][] = "menu_servicio";
$tdatamenu_servicios[".viewFields"][] = "imagen";
$tdatamenu_servicios[".viewFields"][] = "link";
$tdatamenu_servicios[".viewFields"][] = "titulo";
$tdatamenu_servicios[".viewFields"][] = "contenido";

$tdatamenu_servicios[".addFields"] = array();
$tdatamenu_servicios[".addFields"][] = "imagen";
$tdatamenu_servicios[".addFields"][] = "link";
$tdatamenu_servicios[".addFields"][] = "titulo";
$tdatamenu_servicios[".addFields"][] = "contenido";

$tdatamenu_servicios[".masterListFields"] = array();
$tdatamenu_servicios[".masterListFields"][] = "menu_servicio";
$tdatamenu_servicios[".masterListFields"][] = "imagen";
$tdatamenu_servicios[".masterListFields"][] = "link";
$tdatamenu_servicios[".masterListFields"][] = "titulo";
$tdatamenu_servicios[".masterListFields"][] = "contenido";

$tdatamenu_servicios[".inlineAddFields"] = array();
$tdatamenu_servicios[".inlineAddFields"][] = "imagen";
$tdatamenu_servicios[".inlineAddFields"][] = "link";
$tdatamenu_servicios[".inlineAddFields"][] = "titulo";
$tdatamenu_servicios[".inlineAddFields"][] = "contenido";

$tdatamenu_servicios[".editFields"] = array();
$tdatamenu_servicios[".editFields"][] = "imagen";
$tdatamenu_servicios[".editFields"][] = "link";
$tdatamenu_servicios[".editFields"][] = "titulo";
$tdatamenu_servicios[".editFields"][] = "contenido";

$tdatamenu_servicios[".inlineEditFields"] = array();
$tdatamenu_servicios[".inlineEditFields"][] = "imagen";
$tdatamenu_servicios[".inlineEditFields"][] = "link";
$tdatamenu_servicios[".inlineEditFields"][] = "titulo";
$tdatamenu_servicios[".inlineEditFields"][] = "contenido";

$tdatamenu_servicios[".exportFields"] = array();
$tdatamenu_servicios[".exportFields"][] = "menu_servicio";
$tdatamenu_servicios[".exportFields"][] = "imagen";
$tdatamenu_servicios[".exportFields"][] = "link";
$tdatamenu_servicios[".exportFields"][] = "titulo";
$tdatamenu_servicios[".exportFields"][] = "contenido";

$tdatamenu_servicios[".importFields"] = array();
$tdatamenu_servicios[".importFields"][] = "menu_servicio";
$tdatamenu_servicios[".importFields"][] = "imagen";
$tdatamenu_servicios[".importFields"][] = "link";
$tdatamenu_servicios[".importFields"][] = "titulo";
$tdatamenu_servicios[".importFields"][] = "contenido";

$tdatamenu_servicios[".printFields"] = array();
$tdatamenu_servicios[".printFields"][] = "menu_servicio";
$tdatamenu_servicios[".printFields"][] = "imagen";
$tdatamenu_servicios[".printFields"][] = "link";
$tdatamenu_servicios[".printFields"][] = "titulo";
$tdatamenu_servicios[".printFields"][] = "contenido";

//	menu_servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "menu_servicio";
	$fdata["GoodName"] = "menu_servicio";
	$fdata["ownerTable"] = "menu_servicios";
	$fdata["Label"] = GetFieldLabel("menu_servicios","menu_servicio"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "menu_servicio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_servicio";
	
		
		
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

	

	
	$tdatamenu_servicios["menu_servicio"] = $fdata;
//	imagen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "imagen";
	$fdata["GoodName"] = "imagen";
	$fdata["ownerTable"] = "menu_servicios";
	$fdata["Label"] = GetFieldLabel("menu_servicios","imagen"); 
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
	
		$fdata["strField"] = "imagen"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagen";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "servicios";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatamenu_servicios["imagen"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "menu_servicios";
	$fdata["Label"] = GetFieldLabel("menu_servicios","link"); 
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
	
		$fdata["strField"] = "link"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatamenu_servicios["link"] = $fdata;
//	titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "titulo";
	$fdata["GoodName"] = "titulo";
	$fdata["ownerTable"] = "menu_servicios";
	$fdata["Label"] = GetFieldLabel("menu_servicios","titulo"); 
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
	
		$fdata["strField"] = "titulo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo";
	
		
		
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

	

	
	$tdatamenu_servicios["titulo"] = $fdata;
//	contenido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contenido";
	$fdata["GoodName"] = "contenido";
	$fdata["ownerTable"] = "menu_servicios";
	$fdata["Label"] = GetFieldLabel("menu_servicios","contenido"); 
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
	
		$fdata["strField"] = "contenido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contenido";
	
		
		
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

	

	
	$tdatamenu_servicios["contenido"] = $fdata;

	
$tables_data["menu_servicios"]=&$tdatamenu_servicios;
$field_labels["menu_servicios"] = &$fieldLabelsmenu_servicios;
$fieldToolTips["menu_servicios"] = &$fieldToolTipsmenu_servicios;
$page_titles["menu_servicios"] = &$pageTitlesmenu_servicios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["menu_servicios"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["menu_servicios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_menu_servicios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "menu_servicio,  	imagen,  	link,  	titulo,  	contenido";
$proto0["m_strFrom"] = "FROM menu_servicios";
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
	"m_strName" => "menu_servicio",
	"m_strTable" => "menu_servicios",
	"m_srcTableName" => "menu_servicios"
));

$proto5["m_sql"] = "menu_servicio";
$proto5["m_srcTableName"] = "menu_servicios";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "imagen",
	"m_strTable" => "menu_servicios",
	"m_srcTableName" => "menu_servicios"
));

$proto7["m_sql"] = "imagen";
$proto7["m_srcTableName"] = "menu_servicios";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "link",
	"m_strTable" => "menu_servicios",
	"m_srcTableName" => "menu_servicios"
));

$proto9["m_sql"] = "link";
$proto9["m_srcTableName"] = "menu_servicios";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo",
	"m_strTable" => "menu_servicios",
	"m_srcTableName" => "menu_servicios"
));

$proto11["m_sql"] = "titulo";
$proto11["m_srcTableName"] = "menu_servicios";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "contenido",
	"m_strTable" => "menu_servicios",
	"m_srcTableName" => "menu_servicios"
));

$proto13["m_sql"] = "contenido";
$proto13["m_srcTableName"] = "menu_servicios";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "menu_servicios";
$proto16["m_srcTableName"] = "menu_servicios";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "menu_servicio";
$proto16["m_columns"][] = "imagen";
$proto16["m_columns"][] = "link";
$proto16["m_columns"][] = "titulo";
$proto16["m_columns"][] = "contenido";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "menu_servicios";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "menu_servicios";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="menu_servicios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_menu_servicios = createSqlQuery_menu_servicios();


	
					
	
$tdatamenu_servicios[".sqlquery"] = $queryData_menu_servicios;

$tableEvents["menu_servicios"] = new eventsBase;
$tdatamenu_servicios[".hasEvents"] = false;

?>