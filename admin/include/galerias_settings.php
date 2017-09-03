<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagalerias = array();	
	$tdatagalerias[".truncateText"] = true;
	$tdatagalerias[".NumberOfChars"] = 80; 
	$tdatagalerias[".ShortName"] = "galerias";
	$tdatagalerias[".OwnerID"] = "";
	$tdatagalerias[".OriginalTable"] = "galerias";

//	field labels
$fieldLabelsgalerias = array();
$fieldToolTipsgalerias = array();
$pageTitlesgalerias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgalerias["Spanish"] = array();
	$fieldToolTipsgalerias["Spanish"] = array();
	$pageTitlesgalerias["Spanish"] = array();
	$fieldLabelsgalerias["Spanish"]["galeria"] = "Galeria";
	$fieldToolTipsgalerias["Spanish"]["galeria"] = "";
	$fieldLabelsgalerias["Spanish"]["imagen"] = "Imagen";
	$fieldToolTipsgalerias["Spanish"]["imagen"] = "";
	$fieldLabelsgalerias["Spanish"]["zona"] = "Zona";
	$fieldToolTipsgalerias["Spanish"]["zona"] = "";
	$fieldLabelsgalerias["Spanish"]["titulo"] = "Titulo";
	$fieldToolTipsgalerias["Spanish"]["titulo"] = "";
	if (count($fieldToolTipsgalerias["Spanish"]))
		$tdatagalerias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgalerias[""] = array();
	$fieldToolTipsgalerias[""] = array();
	$pageTitlesgalerias[""] = array();
	$fieldLabelsgalerias[""]["galeria"] = "Galeria";
	$fieldToolTipsgalerias[""]["galeria"] = "";
	$fieldLabelsgalerias[""]["imagen"] = "Imagen";
	$fieldToolTipsgalerias[""]["imagen"] = "";
	$fieldLabelsgalerias[""]["zona"] = "Zona";
	$fieldToolTipsgalerias[""]["zona"] = "";
	$fieldLabelsgalerias[""]["titulo"] = "Titulo";
	$fieldToolTipsgalerias[""]["titulo"] = "";
	if (count($fieldToolTipsgalerias[""]))
		$tdatagalerias[".isUseToolTips"] = true;
}
	
	
	$tdatagalerias[".NCSearch"] = true;



$tdatagalerias[".shortTableName"] = "galerias";
$tdatagalerias[".nSecOptions"] = 0;
$tdatagalerias[".recsPerRowList"] = 1;
$tdatagalerias[".recsPerRowPrint"] = 1;
$tdatagalerias[".mainTableOwnerID"] = "";
$tdatagalerias[".moveNext"] = 1;
$tdatagalerias[".entityType"] = 0;

$tdatagalerias[".strOriginalTableName"] = "galerias";




$tdatagalerias[".showAddInPopup"] = false;

$tdatagalerias[".showEditInPopup"] = false;

$tdatagalerias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagalerias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagalerias[".fieldsForRegister"] = array();

$tdatagalerias[".listAjax"] = false;

	$tdatagalerias[".audit"] = false;

	$tdatagalerias[".locking"] = false;

$tdatagalerias[".edit"] = true;
$tdatagalerias[".afterEditAction"] = 1;
$tdatagalerias[".closePopupAfterEdit"] = 1;
$tdatagalerias[".afterEditActionDetTable"] = "";

$tdatagalerias[".add"] = true;
$tdatagalerias[".afterAddAction"] = 1;
$tdatagalerias[".closePopupAfterAdd"] = 1;
$tdatagalerias[".afterAddActionDetTable"] = "";

$tdatagalerias[".list"] = true;

$tdatagalerias[".inlineEdit"] = true;
$tdatagalerias[".inlineAdd"] = true;
$tdatagalerias[".view"] = true;

$tdatagalerias[".import"] = true;

$tdatagalerias[".exportTo"] = true;

$tdatagalerias[".printFriendly"] = true;

$tdatagalerias[".delete"] = true;

$tdatagalerias[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagalerias[".searchSaving"] = false;
//

$tdatagalerias[".showSearchPanel"] = true;
		$tdatagalerias[".flexibleSearch"] = true;		

if (isMobile())
	$tdatagalerias[".isUseAjaxSuggest"] = false;
else 
	$tdatagalerias[".isUseAjaxSuggest"] = true;

$tdatagalerias[".rowHighlite"] = true;



$tdatagalerias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagalerias[".isUseTimeForSearch"] = false;





$tdatagalerias[".allSearchFields"] = array();
$tdatagalerias[".filterFields"] = array();
$tdatagalerias[".requiredSearchFields"] = array();

$tdatagalerias[".allSearchFields"][] = "galeria";
	$tdatagalerias[".allSearchFields"][] = "imagen";
	$tdatagalerias[".allSearchFields"][] = "zona";
	$tdatagalerias[".allSearchFields"][] = "titulo";
	

$tdatagalerias[".googleLikeFields"] = array();
$tdatagalerias[".googleLikeFields"][] = "galeria";
$tdatagalerias[".googleLikeFields"][] = "imagen";
$tdatagalerias[".googleLikeFields"][] = "zona";
$tdatagalerias[".googleLikeFields"][] = "titulo";


$tdatagalerias[".advSearchFields"] = array();
$tdatagalerias[".advSearchFields"][] = "galeria";
$tdatagalerias[".advSearchFields"][] = "imagen";
$tdatagalerias[".advSearchFields"][] = "zona";
$tdatagalerias[".advSearchFields"][] = "titulo";

$tdatagalerias[".tableType"] = "list";

$tdatagalerias[".printerPageOrientation"] = 0;
$tdatagalerias[".nPrinterPageScale"] = 100;

$tdatagalerias[".nPrinterSplitRecords"] = 40;

$tdatagalerias[".nPrinterPDFSplitRecords"] = 40;



$tdatagalerias[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatagalerias[".pageSize"] = 20;

$tdatagalerias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagalerias[".strOrderBy"] = $tstrOrderBy;

$tdatagalerias[".orderindexes"] = array();

$tdatagalerias[".sqlHead"] = "SELECT galeria,  	imagen,  	zona,  	titulo";
$tdatagalerias[".sqlFrom"] = "FROM galerias";
$tdatagalerias[".sqlWhereExpr"] = "";
$tdatagalerias[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagalerias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagalerias[".arrGroupsPerPage"] = $arrGPP;

$tdatagalerias[".highlightSearchResults"] = true;

$tableKeysgalerias = array();
$tableKeysgalerias[] = "galeria";
$tdatagalerias[".Keys"] = $tableKeysgalerias;

$tdatagalerias[".listFields"] = array();
$tdatagalerias[".listFields"][] = "imagen";
$tdatagalerias[".listFields"][] = "titulo";
$tdatagalerias[".listFields"][] = "galeria";
$tdatagalerias[".listFields"][] = "zona";

$tdatagalerias[".hideMobileList"] = array();


$tdatagalerias[".viewFields"] = array();
$tdatagalerias[".viewFields"][] = "galeria";
$tdatagalerias[".viewFields"][] = "imagen";
$tdatagalerias[".viewFields"][] = "zona";
$tdatagalerias[".viewFields"][] = "titulo";

$tdatagalerias[".addFields"] = array();
$tdatagalerias[".addFields"][] = "imagen";
$tdatagalerias[".addFields"][] = "zona";
$tdatagalerias[".addFields"][] = "titulo";

$tdatagalerias[".masterListFields"] = array();
$tdatagalerias[".masterListFields"][] = "galeria";
$tdatagalerias[".masterListFields"][] = "imagen";
$tdatagalerias[".masterListFields"][] = "zona";
$tdatagalerias[".masterListFields"][] = "titulo";

$tdatagalerias[".inlineAddFields"] = array();
$tdatagalerias[".inlineAddFields"][] = "imagen";
$tdatagalerias[".inlineAddFields"][] = "titulo";
$tdatagalerias[".inlineAddFields"][] = "zona";

$tdatagalerias[".editFields"] = array();
$tdatagalerias[".editFields"][] = "imagen";
$tdatagalerias[".editFields"][] = "zona";
$tdatagalerias[".editFields"][] = "titulo";

$tdatagalerias[".inlineEditFields"] = array();
$tdatagalerias[".inlineEditFields"][] = "imagen";
$tdatagalerias[".inlineEditFields"][] = "titulo";
$tdatagalerias[".inlineEditFields"][] = "zona";

$tdatagalerias[".exportFields"] = array();
$tdatagalerias[".exportFields"][] = "galeria";
$tdatagalerias[".exportFields"][] = "imagen";
$tdatagalerias[".exportFields"][] = "zona";
$tdatagalerias[".exportFields"][] = "titulo";

$tdatagalerias[".importFields"] = array();
$tdatagalerias[".importFields"][] = "galeria";
$tdatagalerias[".importFields"][] = "imagen";
$tdatagalerias[".importFields"][] = "zona";
$tdatagalerias[".importFields"][] = "titulo";

$tdatagalerias[".printFields"] = array();
$tdatagalerias[".printFields"][] = "galeria";
$tdatagalerias[".printFields"][] = "imagen";
$tdatagalerias[".printFields"][] = "zona";
$tdatagalerias[".printFields"][] = "titulo";

//	galeria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "galeria";
	$fdata["GoodName"] = "galeria";
	$fdata["ownerTable"] = "galerias";
	$fdata["Label"] = GetFieldLabel("galerias","galeria"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "galeria"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "galeria";
	
		
		
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

	

	
	$tdatagalerias["galeria"] = $fdata;
//	imagen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "imagen";
	$fdata["GoodName"] = "imagen";
	$fdata["ownerTable"] = "galerias";
	$fdata["Label"] = GetFieldLabel("galerias","imagen"); 
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
	
				$fdata["UploadFolder"] = "galeria";
		
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 200;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatagalerias["imagen"] = $fdata;
//	zona
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "zona";
	$fdata["GoodName"] = "zona";
	$fdata["ownerTable"] = "galerias";
	$fdata["Label"] = GetFieldLabel("galerias","zona"); 
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

	

	
	$tdatagalerias["zona"] = $fdata;
//	titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "titulo";
	$fdata["GoodName"] = "titulo";
	$fdata["ownerTable"] = "galerias";
	$fdata["Label"] = GetFieldLabel("galerias","titulo"); 
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

	

	
	$tdatagalerias["titulo"] = $fdata;

	
$tables_data["galerias"]=&$tdatagalerias;
$field_labels["galerias"] = &$fieldLabelsgalerias;
$fieldToolTips["galerias"] = &$fieldToolTipsgalerias;
$page_titles["galerias"] = &$pageTitlesgalerias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["galerias"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["galerias"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_galerias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "galeria,  	imagen,  	zona,  	titulo";
$proto0["m_strFrom"] = "FROM galerias";
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
	"m_strName" => "galeria",
	"m_strTable" => "galerias",
	"m_srcTableName" => "galerias"
));

$proto5["m_sql"] = "galeria";
$proto5["m_srcTableName"] = "galerias";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "imagen",
	"m_strTable" => "galerias",
	"m_srcTableName" => "galerias"
));

$proto7["m_sql"] = "imagen";
$proto7["m_srcTableName"] = "galerias";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "zona",
	"m_strTable" => "galerias",
	"m_srcTableName" => "galerias"
));

$proto9["m_sql"] = "zona";
$proto9["m_srcTableName"] = "galerias";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo",
	"m_strTable" => "galerias",
	"m_srcTableName" => "galerias"
));

$proto11["m_sql"] = "titulo";
$proto11["m_srcTableName"] = "galerias";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "galerias";
$proto14["m_srcTableName"] = "galerias";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "galeria";
$proto14["m_columns"][] = "imagen";
$proto14["m_columns"][] = "zona";
$proto14["m_columns"][] = "titulo";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "galerias";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "galerias";
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
$proto0["m_srcTableName"]="galerias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_galerias = createSqlQuery_galerias();


	
				
	
$tdatagalerias[".sqlquery"] = $queryData_galerias;

$tableEvents["galerias"] = new eventsBase;
$tdatagalerias[".hasEvents"] = false;

?>