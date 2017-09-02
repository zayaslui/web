<?php
require_once(getabspath("classes/cipherer.php"));




$tdataimagenes_promociones = array();	
	$tdataimagenes_promociones[".truncateText"] = true;
	$tdataimagenes_promociones[".NumberOfChars"] = 80; 
	$tdataimagenes_promociones[".ShortName"] = "imagenes_promociones";
	$tdataimagenes_promociones[".OwnerID"] = "";
	$tdataimagenes_promociones[".OriginalTable"] = "imagenes_promociones";

//	field labels
$fieldLabelsimagenes_promociones = array();
$fieldToolTipsimagenes_promociones = array();
$pageTitlesimagenes_promociones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsimagenes_promociones["Spanish"] = array();
	$fieldToolTipsimagenes_promociones["Spanish"] = array();
	$pageTitlesimagenes_promociones["Spanish"] = array();
	$fieldLabelsimagenes_promociones["Spanish"]["imagen_promocion"] = "Imagen Promocion";
	$fieldToolTipsimagenes_promociones["Spanish"]["imagen_promocion"] = "";
	$fieldLabelsimagenes_promociones["Spanish"]["imagen"] = "Imagen";
	$fieldToolTipsimagenes_promociones["Spanish"]["imagen"] = "";
	$fieldLabelsimagenes_promociones["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsimagenes_promociones["Spanish"]["descripcion"] = "";
	$fieldLabelsimagenes_promociones["Spanish"]["promocion"] = "Promocion";
	$fieldToolTipsimagenes_promociones["Spanish"]["promocion"] = "";
	if (count($fieldToolTipsimagenes_promociones["Spanish"]))
		$tdataimagenes_promociones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsimagenes_promociones[""] = array();
	$fieldToolTipsimagenes_promociones[""] = array();
	$pageTitlesimagenes_promociones[""] = array();
	$fieldLabelsimagenes_promociones[""]["imagen_promocion"] = "Imagen Promocion";
	$fieldToolTipsimagenes_promociones[""]["imagen_promocion"] = "";
	$fieldLabelsimagenes_promociones[""]["imagen"] = "Imagen";
	$fieldToolTipsimagenes_promociones[""]["imagen"] = "";
	$fieldLabelsimagenes_promociones[""]["descripcion"] = "Descripcion";
	$fieldToolTipsimagenes_promociones[""]["descripcion"] = "";
	$fieldLabelsimagenes_promociones[""]["promocion"] = "Promocion";
	$fieldToolTipsimagenes_promociones[""]["promocion"] = "";
	if (count($fieldToolTipsimagenes_promociones[""]))
		$tdataimagenes_promociones[".isUseToolTips"] = true;
}
	
	
	$tdataimagenes_promociones[".NCSearch"] = true;



$tdataimagenes_promociones[".shortTableName"] = "imagenes_promociones";
$tdataimagenes_promociones[".nSecOptions"] = 0;
$tdataimagenes_promociones[".recsPerRowList"] = 1;
$tdataimagenes_promociones[".recsPerRowPrint"] = 1;
$tdataimagenes_promociones[".mainTableOwnerID"] = "";
$tdataimagenes_promociones[".moveNext"] = 1;
$tdataimagenes_promociones[".entityType"] = 0;

$tdataimagenes_promociones[".strOriginalTableName"] = "imagenes_promociones";




$tdataimagenes_promociones[".showAddInPopup"] = false;

$tdataimagenes_promociones[".showEditInPopup"] = false;

$tdataimagenes_promociones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataimagenes_promociones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataimagenes_promociones[".fieldsForRegister"] = array();

$tdataimagenes_promociones[".listAjax"] = false;

	$tdataimagenes_promociones[".audit"] = false;

	$tdataimagenes_promociones[".locking"] = false;

$tdataimagenes_promociones[".edit"] = true;
$tdataimagenes_promociones[".afterEditAction"] = 1;
$tdataimagenes_promociones[".closePopupAfterEdit"] = 1;
$tdataimagenes_promociones[".afterEditActionDetTable"] = "";

$tdataimagenes_promociones[".add"] = true;
$tdataimagenes_promociones[".afterAddAction"] = 1;
$tdataimagenes_promociones[".closePopupAfterAdd"] = 1;
$tdataimagenes_promociones[".afterAddActionDetTable"] = "";

$tdataimagenes_promociones[".list"] = true;

$tdataimagenes_promociones[".inlineEdit"] = true;
$tdataimagenes_promociones[".inlineAdd"] = true;
$tdataimagenes_promociones[".view"] = true;

$tdataimagenes_promociones[".import"] = true;

$tdataimagenes_promociones[".exportTo"] = true;

$tdataimagenes_promociones[".printFriendly"] = true;

$tdataimagenes_promociones[".delete"] = true;

$tdataimagenes_promociones[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataimagenes_promociones[".searchSaving"] = false;
//

$tdataimagenes_promociones[".showSearchPanel"] = true;
		$tdataimagenes_promociones[".flexibleSearch"] = true;		

if (isMobile())
	$tdataimagenes_promociones[".isUseAjaxSuggest"] = false;
else 
	$tdataimagenes_promociones[".isUseAjaxSuggest"] = true;

$tdataimagenes_promociones[".rowHighlite"] = true;



$tdataimagenes_promociones[".addPageEvents"] = false;

// use timepicker for search panel
$tdataimagenes_promociones[".isUseTimeForSearch"] = false;





$tdataimagenes_promociones[".allSearchFields"] = array();
$tdataimagenes_promociones[".filterFields"] = array();
$tdataimagenes_promociones[".requiredSearchFields"] = array();

$tdataimagenes_promociones[".allSearchFields"][] = "imagen_promocion";
	$tdataimagenes_promociones[".allSearchFields"][] = "promocion";
	$tdataimagenes_promociones[".allSearchFields"][] = "descripcion";
	

$tdataimagenes_promociones[".googleLikeFields"] = array();
$tdataimagenes_promociones[".googleLikeFields"][] = "imagen_promocion";
$tdataimagenes_promociones[".googleLikeFields"][] = "promocion";
$tdataimagenes_promociones[".googleLikeFields"][] = "descripcion";


$tdataimagenes_promociones[".advSearchFields"] = array();
$tdataimagenes_promociones[".advSearchFields"][] = "imagen_promocion";
$tdataimagenes_promociones[".advSearchFields"][] = "promocion";
$tdataimagenes_promociones[".advSearchFields"][] = "descripcion";

$tdataimagenes_promociones[".tableType"] = "list";

$tdataimagenes_promociones[".printerPageOrientation"] = 0;
$tdataimagenes_promociones[".nPrinterPageScale"] = 100;

$tdataimagenes_promociones[".nPrinterSplitRecords"] = 40;

$tdataimagenes_promociones[".nPrinterPDFSplitRecords"] = 40;



$tdataimagenes_promociones[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataimagenes_promociones[".pageSize"] = 20;

$tdataimagenes_promociones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataimagenes_promociones[".strOrderBy"] = $tstrOrderBy;

$tdataimagenes_promociones[".orderindexes"] = array();

$tdataimagenes_promociones[".sqlHead"] = "SELECT imagen_promocion,  	imagen,  	promocion,  	descripcion";
$tdataimagenes_promociones[".sqlFrom"] = "FROM imagenes_promociones";
$tdataimagenes_promociones[".sqlWhereExpr"] = "";
$tdataimagenes_promociones[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataimagenes_promociones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataimagenes_promociones[".arrGroupsPerPage"] = $arrGPP;

$tdataimagenes_promociones[".highlightSearchResults"] = true;

$tableKeysimagenes_promociones = array();
$tableKeysimagenes_promociones[] = "imagen_promocion";
$tdataimagenes_promociones[".Keys"] = $tableKeysimagenes_promociones;

$tdataimagenes_promociones[".listFields"] = array();
$tdataimagenes_promociones[".listFields"][] = "imagen_promocion";
$tdataimagenes_promociones[".listFields"][] = "imagen";
$tdataimagenes_promociones[".listFields"][] = "promocion";
$tdataimagenes_promociones[".listFields"][] = "descripcion";

$tdataimagenes_promociones[".hideMobileList"] = array();


$tdataimagenes_promociones[".viewFields"] = array();
$tdataimagenes_promociones[".viewFields"][] = "imagen_promocion";
$tdataimagenes_promociones[".viewFields"][] = "imagen";
$tdataimagenes_promociones[".viewFields"][] = "promocion";
$tdataimagenes_promociones[".viewFields"][] = "descripcion";

$tdataimagenes_promociones[".addFields"] = array();
$tdataimagenes_promociones[".addFields"][] = "imagen";
$tdataimagenes_promociones[".addFields"][] = "promocion";
$tdataimagenes_promociones[".addFields"][] = "descripcion";

$tdataimagenes_promociones[".masterListFields"] = array();
$tdataimagenes_promociones[".masterListFields"][] = "imagen_promocion";
$tdataimagenes_promociones[".masterListFields"][] = "imagen";
$tdataimagenes_promociones[".masterListFields"][] = "promocion";
$tdataimagenes_promociones[".masterListFields"][] = "descripcion";

$tdataimagenes_promociones[".inlineAddFields"] = array();
$tdataimagenes_promociones[".inlineAddFields"][] = "imagen";
$tdataimagenes_promociones[".inlineAddFields"][] = "promocion";
$tdataimagenes_promociones[".inlineAddFields"][] = "descripcion";

$tdataimagenes_promociones[".editFields"] = array();
$tdataimagenes_promociones[".editFields"][] = "imagen";
$tdataimagenes_promociones[".editFields"][] = "promocion";
$tdataimagenes_promociones[".editFields"][] = "descripcion";

$tdataimagenes_promociones[".inlineEditFields"] = array();
$tdataimagenes_promociones[".inlineEditFields"][] = "imagen";
$tdataimagenes_promociones[".inlineEditFields"][] = "promocion";
$tdataimagenes_promociones[".inlineEditFields"][] = "descripcion";

$tdataimagenes_promociones[".exportFields"] = array();
$tdataimagenes_promociones[".exportFields"][] = "imagen_promocion";
$tdataimagenes_promociones[".exportFields"][] = "promocion";
$tdataimagenes_promociones[".exportFields"][] = "descripcion";

$tdataimagenes_promociones[".importFields"] = array();
$tdataimagenes_promociones[".importFields"][] = "imagen_promocion";
$tdataimagenes_promociones[".importFields"][] = "promocion";
$tdataimagenes_promociones[".importFields"][] = "descripcion";

$tdataimagenes_promociones[".printFields"] = array();
$tdataimagenes_promociones[".printFields"][] = "imagen_promocion";
$tdataimagenes_promociones[".printFields"][] = "imagen";
$tdataimagenes_promociones[".printFields"][] = "promocion";
$tdataimagenes_promociones[".printFields"][] = "descripcion";

//	imagen_promocion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "imagen_promocion";
	$fdata["GoodName"] = "imagen_promocion";
	$fdata["ownerTable"] = "imagenes_promociones";
	$fdata["Label"] = GetFieldLabel("imagenes_promociones","imagen_promocion"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "imagen_promocion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagen_promocion";
	
		
		
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

	

	
	$tdataimagenes_promociones["imagen_promocion"] = $fdata;
//	imagen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "imagen";
	$fdata["GoodName"] = "imagen";
	$fdata["ownerTable"] = "imagenes_promociones";
	$fdata["Label"] = GetFieldLabel("imagenes_promociones","imagen"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "imagen"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagen";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
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
	
	
	
	

	

	
	$tdataimagenes_promociones["imagen"] = $fdata;
//	promocion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "promocion";
	$fdata["GoodName"] = "promocion";
	$fdata["ownerTable"] = "imagenes_promociones";
	$fdata["Label"] = GetFieldLabel("imagenes_promociones","promocion"); 
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

	

	
	$tdataimagenes_promociones["promocion"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "imagenes_promociones";
	$fdata["Label"] = GetFieldLabel("imagenes_promociones","descripcion"); 
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
	
		$fdata["strField"] = "descripcion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";
	
		
		
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

	

	
	$tdataimagenes_promociones["descripcion"] = $fdata;

	
$tables_data["imagenes_promociones"]=&$tdataimagenes_promociones;
$field_labels["imagenes_promociones"] = &$fieldLabelsimagenes_promociones;
$fieldToolTips["imagenes_promociones"] = &$fieldToolTipsimagenes_promociones;
$page_titles["imagenes_promociones"] = &$pageTitlesimagenes_promociones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["imagenes_promociones"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["imagenes_promociones"] = array();


	
				$strOriginalDetailsTable="promociones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="promociones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "promociones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["imagenes_promociones"][0] = $masterParams;	
				$masterTablesData["imagenes_promociones"][0]["masterKeys"] = array();
	$masterTablesData["imagenes_promociones"][0]["masterKeys"][]="promocion";
				$masterTablesData["imagenes_promociones"][0]["detailKeys"] = array();
	$masterTablesData["imagenes_promociones"][0]["detailKeys"][]="promocion";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_imagenes_promociones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "imagen_promocion,  	imagen,  	promocion,  	descripcion";
$proto0["m_strFrom"] = "FROM imagenes_promociones";
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
	"m_strName" => "imagen_promocion",
	"m_strTable" => "imagenes_promociones",
	"m_srcTableName" => "imagenes_promociones"
));

$proto5["m_sql"] = "imagen_promocion";
$proto5["m_srcTableName"] = "imagenes_promociones";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "imagen",
	"m_strTable" => "imagenes_promociones",
	"m_srcTableName" => "imagenes_promociones"
));

$proto7["m_sql"] = "imagen";
$proto7["m_srcTableName"] = "imagenes_promociones";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "promocion",
	"m_strTable" => "imagenes_promociones",
	"m_srcTableName" => "imagenes_promociones"
));

$proto9["m_sql"] = "promocion";
$proto9["m_srcTableName"] = "imagenes_promociones";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "imagenes_promociones",
	"m_srcTableName" => "imagenes_promociones"
));

$proto11["m_sql"] = "descripcion";
$proto11["m_srcTableName"] = "imagenes_promociones";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "imagenes_promociones";
$proto14["m_srcTableName"] = "imagenes_promociones";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "imagen_promocion";
$proto14["m_columns"][] = "imagen";
$proto14["m_columns"][] = "promocion";
$proto14["m_columns"][] = "descripcion";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "imagenes_promociones";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "imagenes_promociones";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="imagenes_promociones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_imagenes_promociones = createSqlQuery_imagenes_promociones();


	
				
	
$tdataimagenes_promociones[".sqlquery"] = $queryData_imagenes_promociones;

$tableEvents["imagenes_promociones"] = new eventsBase;
$tdataimagenes_promociones[".hasEvents"] = false;

?>