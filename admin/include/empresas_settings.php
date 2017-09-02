<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempresas = array();	
	$tdataempresas[".truncateText"] = true;
	$tdataempresas[".NumberOfChars"] = 80; 
	$tdataempresas[".ShortName"] = "empresas";
	$tdataempresas[".OwnerID"] = "";
	$tdataempresas[".OriginalTable"] = "empresas";

//	field labels
$fieldLabelsempresas = array();
$fieldToolTipsempresas = array();
$pageTitlesempresas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas["Spanish"] = array();
	$fieldToolTipsempresas["Spanish"] = array();
	$pageTitlesempresas["Spanish"] = array();
	$fieldLabelsempresas["Spanish"]["empresa"] = "Empresa";
	$fieldToolTipsempresas["Spanish"]["empresa"] = "";
	$fieldLabelsempresas["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsempresas["Spanish"]["direccion"] = "";
	$fieldLabelsempresas["Spanish"]["telefonos"] = "Telefonos";
	$fieldToolTipsempresas["Spanish"]["telefonos"] = "";
	$fieldLabelsempresas["Spanish"]["correo"] = "Correo";
	$fieldToolTipsempresas["Spanish"]["correo"] = "";
	$fieldLabelsempresas["Spanish"]["correo2"] = "Correo2";
	$fieldToolTipsempresas["Spanish"]["correo2"] = "";
	$fieldLabelsempresas["Spanish"]["leyenda"] = "Leyenda";
	$fieldToolTipsempresas["Spanish"]["leyenda"] = "";
	if (count($fieldToolTipsempresas["Spanish"]))
		$tdataempresas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempresas[""] = array();
	$fieldToolTipsempresas[""] = array();
	$pageTitlesempresas[""] = array();
	$fieldLabelsempresas[""]["empresa"] = "Empresa";
	$fieldToolTipsempresas[""]["empresa"] = "";
	$fieldLabelsempresas[""]["direccion"] = "Direccion";
	$fieldToolTipsempresas[""]["direccion"] = "";
	$fieldLabelsempresas[""]["telefonos"] = "Telefonos";
	$fieldToolTipsempresas[""]["telefonos"] = "";
	$fieldLabelsempresas[""]["correo"] = "Correo";
	$fieldToolTipsempresas[""]["correo"] = "";
	$fieldLabelsempresas[""]["correo2"] = "Correo2";
	$fieldToolTipsempresas[""]["correo2"] = "";
	$fieldLabelsempresas[""]["leyenda"] = "Leyenda";
	$fieldToolTipsempresas[""]["leyenda"] = "";
	if (count($fieldToolTipsempresas[""]))
		$tdataempresas[".isUseToolTips"] = true;
}
	
	
	$tdataempresas[".NCSearch"] = true;



$tdataempresas[".shortTableName"] = "empresas";
$tdataempresas[".nSecOptions"] = 0;
$tdataempresas[".recsPerRowList"] = 1;
$tdataempresas[".recsPerRowPrint"] = 1;
$tdataempresas[".mainTableOwnerID"] = "";
$tdataempresas[".moveNext"] = 1;
$tdataempresas[".entityType"] = 0;

$tdataempresas[".strOriginalTableName"] = "empresas";




$tdataempresas[".showAddInPopup"] = false;

$tdataempresas[".showEditInPopup"] = false;

$tdataempresas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempresas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempresas[".fieldsForRegister"] = array();

$tdataempresas[".listAjax"] = false;

	$tdataempresas[".audit"] = false;

	$tdataempresas[".locking"] = false;

$tdataempresas[".edit"] = true;
$tdataempresas[".afterEditAction"] = 1;
$tdataempresas[".closePopupAfterEdit"] = 1;
$tdataempresas[".afterEditActionDetTable"] = "";

$tdataempresas[".add"] = true;
$tdataempresas[".afterAddAction"] = 1;
$tdataempresas[".closePopupAfterAdd"] = 1;
$tdataempresas[".afterAddActionDetTable"] = "";

$tdataempresas[".list"] = true;

$tdataempresas[".inlineEdit"] = true;
$tdataempresas[".view"] = true;

$tdataempresas[".import"] = true;

$tdataempresas[".exportTo"] = true;

$tdataempresas[".printFriendly"] = true;

$tdataempresas[".delete"] = true;

$tdataempresas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataempresas[".searchSaving"] = false;
//

$tdataempresas[".showSearchPanel"] = true;
		$tdataempresas[".flexibleSearch"] = true;		

if (isMobile())
	$tdataempresas[".isUseAjaxSuggest"] = false;
else 
	$tdataempresas[".isUseAjaxSuggest"] = true;

$tdataempresas[".rowHighlite"] = true;



$tdataempresas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas[".isUseTimeForSearch"] = false;





$tdataempresas[".allSearchFields"] = array();
$tdataempresas[".filterFields"] = array();
$tdataempresas[".requiredSearchFields"] = array();

$tdataempresas[".allSearchFields"][] = "empresa";
	$tdataempresas[".allSearchFields"][] = "direccion";
	$tdataempresas[".allSearchFields"][] = "telefonos";
	$tdataempresas[".allSearchFields"][] = "correo";
	$tdataempresas[".allSearchFields"][] = "correo2";
	$tdataempresas[".allSearchFields"][] = "leyenda";
	

$tdataempresas[".googleLikeFields"] = array();
$tdataempresas[".googleLikeFields"][] = "empresa";
$tdataempresas[".googleLikeFields"][] = "direccion";
$tdataempresas[".googleLikeFields"][] = "telefonos";
$tdataempresas[".googleLikeFields"][] = "correo";
$tdataempresas[".googleLikeFields"][] = "correo2";
$tdataempresas[".googleLikeFields"][] = "leyenda";


$tdataempresas[".advSearchFields"] = array();
$tdataempresas[".advSearchFields"][] = "empresa";
$tdataempresas[".advSearchFields"][] = "direccion";
$tdataempresas[".advSearchFields"][] = "telefonos";
$tdataempresas[".advSearchFields"][] = "correo";
$tdataempresas[".advSearchFields"][] = "correo2";
$tdataempresas[".advSearchFields"][] = "leyenda";

$tdataempresas[".tableType"] = "list";

$tdataempresas[".printerPageOrientation"] = 0;
$tdataempresas[".nPrinterPageScale"] = 100;

$tdataempresas[".nPrinterSplitRecords"] = 40;

$tdataempresas[".nPrinterPDFSplitRecords"] = 40;



$tdataempresas[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataempresas[".pageSize"] = 20;

$tdataempresas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempresas[".strOrderBy"] = $tstrOrderBy;

$tdataempresas[".orderindexes"] = array();

$tdataempresas[".sqlHead"] = "SELECT empresa,  	direccion,  	telefonos,  	correo,  	correo2,  	leyenda";
$tdataempresas[".sqlFrom"] = "FROM empresas";
$tdataempresas[".sqlWhereExpr"] = "";
$tdataempresas[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas[".highlightSearchResults"] = true;

$tableKeysempresas = array();
$tableKeysempresas[] = "empresa";
$tdataempresas[".Keys"] = $tableKeysempresas;

$tdataempresas[".listFields"] = array();
$tdataempresas[".listFields"][] = "correo2";
$tdataempresas[".listFields"][] = "leyenda";
$tdataempresas[".listFields"][] = "correo";
$tdataempresas[".listFields"][] = "empresa";
$tdataempresas[".listFields"][] = "direccion";
$tdataempresas[".listFields"][] = "telefonos";

$tdataempresas[".hideMobileList"] = array();


$tdataempresas[".viewFields"] = array();
$tdataempresas[".viewFields"][] = "empresa";
$tdataempresas[".viewFields"][] = "direccion";
$tdataempresas[".viewFields"][] = "telefonos";
$tdataempresas[".viewFields"][] = "correo";
$tdataempresas[".viewFields"][] = "correo2";
$tdataempresas[".viewFields"][] = "leyenda";

$tdataempresas[".addFields"] = array();
$tdataempresas[".addFields"][] = "direccion";
$tdataempresas[".addFields"][] = "telefonos";
$tdataempresas[".addFields"][] = "correo";
$tdataempresas[".addFields"][] = "correo2";
$tdataempresas[".addFields"][] = "leyenda";

$tdataempresas[".masterListFields"] = array();
$tdataempresas[".masterListFields"][] = "empresa";
$tdataempresas[".masterListFields"][] = "direccion";
$tdataempresas[".masterListFields"][] = "telefonos";
$tdataempresas[".masterListFields"][] = "correo";
$tdataempresas[".masterListFields"][] = "correo2";
$tdataempresas[".masterListFields"][] = "leyenda";

$tdataempresas[".inlineAddFields"] = array();

$tdataempresas[".editFields"] = array();
$tdataempresas[".editFields"][] = "direccion";
$tdataempresas[".editFields"][] = "telefonos";
$tdataempresas[".editFields"][] = "correo";
$tdataempresas[".editFields"][] = "correo2";
$tdataempresas[".editFields"][] = "leyenda";

$tdataempresas[".inlineEditFields"] = array();
$tdataempresas[".inlineEditFields"][] = "correo2";
$tdataempresas[".inlineEditFields"][] = "leyenda";
$tdataempresas[".inlineEditFields"][] = "correo";
$tdataempresas[".inlineEditFields"][] = "direccion";
$tdataempresas[".inlineEditFields"][] = "telefonos";

$tdataempresas[".exportFields"] = array();
$tdataempresas[".exportFields"][] = "empresa";
$tdataempresas[".exportFields"][] = "direccion";
$tdataempresas[".exportFields"][] = "telefonos";
$tdataempresas[".exportFields"][] = "correo";
$tdataempresas[".exportFields"][] = "correo2";
$tdataempresas[".exportFields"][] = "leyenda";

$tdataempresas[".importFields"] = array();
$tdataempresas[".importFields"][] = "empresa";
$tdataempresas[".importFields"][] = "direccion";
$tdataempresas[".importFields"][] = "telefonos";
$tdataempresas[".importFields"][] = "correo";
$tdataempresas[".importFields"][] = "correo2";
$tdataempresas[".importFields"][] = "leyenda";

$tdataempresas[".printFields"] = array();
$tdataempresas[".printFields"][] = "empresa";
$tdataempresas[".printFields"][] = "direccion";
$tdataempresas[".printFields"][] = "telefonos";
$tdataempresas[".printFields"][] = "correo";
$tdataempresas[".printFields"][] = "correo2";
$tdataempresas[".printFields"][] = "leyenda";

//	empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "empresa";
	$fdata["GoodName"] = "empresa";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","empresa"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "empresa"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresa";
	
		
		
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

	

	
	$tdataempresas["empresa"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","direccion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "direccion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";
	
		
		
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

	

	
	$tdataempresas["direccion"] = $fdata;
//	telefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "telefonos";
	$fdata["GoodName"] = "telefonos";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","telefonos"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "telefonos"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefonos";
	
		
		
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

	

	
	$tdataempresas["telefonos"] = $fdata;
//	correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "correo";
	$fdata["GoodName"] = "correo";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","correo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "correo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correo";
	
		
		
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

	

	
	$tdataempresas["correo"] = $fdata;
//	correo2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "correo2";
	$fdata["GoodName"] = "correo2";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","correo2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "correo2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correo2";
	
		
		
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

	

	
	$tdataempresas["correo2"] = $fdata;
//	leyenda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "leyenda";
	$fdata["GoodName"] = "leyenda";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","leyenda"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
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

	

	
	$tdataempresas["leyenda"] = $fdata;

	
$tables_data["empresas"]=&$tdataempresas;
$field_labels["empresas"] = &$fieldLabelsempresas;
$fieldToolTips["empresas"] = &$fieldToolTipsempresas;
$page_titles["empresas"] = &$pageTitlesempresas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empresas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["empresas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empresas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "empresa,  	direccion,  	telefonos,  	correo,  	correo2,  	leyenda";
$proto0["m_strFrom"] = "FROM empresas";
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
	"m_strName" => "empresa",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto5["m_sql"] = "empresa";
$proto5["m_srcTableName"] = "empresas";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto7["m_sql"] = "direccion";
$proto7["m_srcTableName"] = "empresas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "telefonos",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto9["m_sql"] = "telefonos";
$proto9["m_srcTableName"] = "empresas";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "correo",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto11["m_sql"] = "correo";
$proto11["m_srcTableName"] = "empresas";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "correo2",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto13["m_sql"] = "correo2";
$proto13["m_srcTableName"] = "empresas";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "leyenda",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto15["m_sql"] = "leyenda";
$proto15["m_srcTableName"] = "empresas";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "empresas";
$proto18["m_srcTableName"] = "empresas";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "empresa";
$proto18["m_columns"][] = "direccion";
$proto18["m_columns"][] = "telefonos";
$proto18["m_columns"][] = "correo";
$proto18["m_columns"][] = "correo2";
$proto18["m_columns"][] = "leyenda";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "empresas";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "empresas";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="empresas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas = createSqlQuery_empresas();


	
						
	
$tdataempresas[".sqlquery"] = $queryData_empresas;

$tableEvents["empresas"] = new eventsBase;
$tdataempresas[".hasEvents"] = false;

?>