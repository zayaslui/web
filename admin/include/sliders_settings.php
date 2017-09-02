<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasliders = array();	
	$tdatasliders[".truncateText"] = true;
	$tdatasliders[".NumberOfChars"] = 80; 
	$tdatasliders[".ShortName"] = "sliders";
	$tdatasliders[".OwnerID"] = "";
	$tdatasliders[".OriginalTable"] = "sliders";

//	field labels
$fieldLabelssliders = array();
$fieldToolTipssliders = array();
$pageTitlessliders = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssliders["Spanish"] = array();
	$fieldToolTipssliders["Spanish"] = array();
	$pageTitlessliders["Spanish"] = array();
	$fieldLabelssliders["Spanish"]["slider"] = "Slider";
	$fieldToolTipssliders["Spanish"]["slider"] = "";
	$fieldLabelssliders["Spanish"]["promocion"] = "Promocion";
	$fieldToolTipssliders["Spanish"]["promocion"] = "";
	$fieldLabelssliders["Spanish"]["imagen"] = "Imagen";
	$fieldToolTipssliders["Spanish"]["imagen"] = "";
	$fieldLabelssliders["Spanish"]["clase"] = "Clase";
	$fieldToolTipssliders["Spanish"]["clase"] = "";
	if (count($fieldToolTipssliders["Spanish"]))
		$tdatasliders[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssliders[""] = array();
	$fieldToolTipssliders[""] = array();
	$pageTitlessliders[""] = array();
	$fieldLabelssliders[""]["slider"] = "Slider";
	$fieldToolTipssliders[""]["slider"] = "";
	$fieldLabelssliders[""]["promocion"] = "Promocion";
	$fieldToolTipssliders[""]["promocion"] = "";
	$fieldLabelssliders[""]["imagen"] = "Imagen";
	$fieldToolTipssliders[""]["imagen"] = "";
	$fieldLabelssliders[""]["clase"] = "Clase";
	$fieldToolTipssliders[""]["clase"] = "";
	if (count($fieldToolTipssliders[""]))
		$tdatasliders[".isUseToolTips"] = true;
}
	
	
	$tdatasliders[".NCSearch"] = true;



$tdatasliders[".shortTableName"] = "sliders";
$tdatasliders[".nSecOptions"] = 0;
$tdatasliders[".recsPerRowList"] = 1;
$tdatasliders[".recsPerRowPrint"] = 1;
$tdatasliders[".mainTableOwnerID"] = "";
$tdatasliders[".moveNext"] = 1;
$tdatasliders[".entityType"] = 0;

$tdatasliders[".strOriginalTableName"] = "sliders";




$tdatasliders[".showAddInPopup"] = false;

$tdatasliders[".showEditInPopup"] = false;

$tdatasliders[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasliders[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasliders[".fieldsForRegister"] = array();

$tdatasliders[".listAjax"] = false;

	$tdatasliders[".audit"] = false;

	$tdatasliders[".locking"] = false;

$tdatasliders[".edit"] = true;
$tdatasliders[".afterEditAction"] = 1;
$tdatasliders[".closePopupAfterEdit"] = 1;
$tdatasliders[".afterEditActionDetTable"] = "";

$tdatasliders[".add"] = true;
$tdatasliders[".afterAddAction"] = 1;
$tdatasliders[".closePopupAfterAdd"] = 1;
$tdatasliders[".afterAddActionDetTable"] = "";

$tdatasliders[".list"] = true;

$tdatasliders[".inlineEdit"] = true;
$tdatasliders[".inlineAdd"] = true;
$tdatasliders[".view"] = true;

$tdatasliders[".import"] = true;

$tdatasliders[".exportTo"] = true;

$tdatasliders[".printFriendly"] = true;

$tdatasliders[".delete"] = true;

$tdatasliders[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasliders[".searchSaving"] = false;
//

$tdatasliders[".showSearchPanel"] = true;
		$tdatasliders[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasliders[".isUseAjaxSuggest"] = false;
else 
	$tdatasliders[".isUseAjaxSuggest"] = true;

$tdatasliders[".rowHighlite"] = true;



$tdatasliders[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasliders[".isUseTimeForSearch"] = false;





$tdatasliders[".allSearchFields"] = array();
$tdatasliders[".filterFields"] = array();
$tdatasliders[".requiredSearchFields"] = array();

$tdatasliders[".allSearchFields"][] = "slider";
	$tdatasliders[".allSearchFields"][] = "promocion";
	$tdatasliders[".allSearchFields"][] = "clase";
	

$tdatasliders[".googleLikeFields"] = array();
$tdatasliders[".googleLikeFields"][] = "slider";
$tdatasliders[".googleLikeFields"][] = "promocion";
$tdatasliders[".googleLikeFields"][] = "clase";


$tdatasliders[".advSearchFields"] = array();
$tdatasliders[".advSearchFields"][] = "slider";
$tdatasliders[".advSearchFields"][] = "promocion";
$tdatasliders[".advSearchFields"][] = "clase";

$tdatasliders[".tableType"] = "list";

$tdatasliders[".printerPageOrientation"] = 0;
$tdatasliders[".nPrinterPageScale"] = 100;

$tdatasliders[".nPrinterSplitRecords"] = 40;

$tdatasliders[".nPrinterPDFSplitRecords"] = 40;



$tdatasliders[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatasliders[".pageSize"] = 20;

$tdatasliders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasliders[".strOrderBy"] = $tstrOrderBy;

$tdatasliders[".orderindexes"] = array();

$tdatasliders[".sqlHead"] = "SELECT slider,  	promocion,  	imagen,  	clase";
$tdatasliders[".sqlFrom"] = "FROM sliders";
$tdatasliders[".sqlWhereExpr"] = "";
$tdatasliders[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasliders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasliders[".arrGroupsPerPage"] = $arrGPP;

$tdatasliders[".highlightSearchResults"] = true;

$tableKeyssliders = array();
$tableKeyssliders[] = "slider";
$tdatasliders[".Keys"] = $tableKeyssliders;

$tdatasliders[".listFields"] = array();
$tdatasliders[".listFields"][] = "clase";
$tdatasliders[".listFields"][] = "slider";
$tdatasliders[".listFields"][] = "promocion";
$tdatasliders[".listFields"][] = "imagen";

$tdatasliders[".hideMobileList"] = array();


$tdatasliders[".viewFields"] = array();
$tdatasliders[".viewFields"][] = "slider";
$tdatasliders[".viewFields"][] = "promocion";
$tdatasliders[".viewFields"][] = "imagen";
$tdatasliders[".viewFields"][] = "clase";

$tdatasliders[".addFields"] = array();
$tdatasliders[".addFields"][] = "promocion";
$tdatasliders[".addFields"][] = "imagen";
$tdatasliders[".addFields"][] = "clase";

$tdatasliders[".masterListFields"] = array();
$tdatasliders[".masterListFields"][] = "slider";
$tdatasliders[".masterListFields"][] = "promocion";
$tdatasliders[".masterListFields"][] = "imagen";
$tdatasliders[".masterListFields"][] = "clase";

$tdatasliders[".inlineAddFields"] = array();
$tdatasliders[".inlineAddFields"][] = "clase";
$tdatasliders[".inlineAddFields"][] = "promocion";
$tdatasliders[".inlineAddFields"][] = "imagen";

$tdatasliders[".editFields"] = array();
$tdatasliders[".editFields"][] = "promocion";
$tdatasliders[".editFields"][] = "imagen";
$tdatasliders[".editFields"][] = "clase";

$tdatasliders[".inlineEditFields"] = array();
$tdatasliders[".inlineEditFields"][] = "clase";
$tdatasliders[".inlineEditFields"][] = "promocion";
$tdatasliders[".inlineEditFields"][] = "imagen";

$tdatasliders[".exportFields"] = array();
$tdatasliders[".exportFields"][] = "slider";
$tdatasliders[".exportFields"][] = "promocion";
$tdatasliders[".exportFields"][] = "clase";

$tdatasliders[".importFields"] = array();
$tdatasliders[".importFields"][] = "slider";
$tdatasliders[".importFields"][] = "promocion";
$tdatasliders[".importFields"][] = "clase";

$tdatasliders[".printFields"] = array();
$tdatasliders[".printFields"][] = "slider";
$tdatasliders[".printFields"][] = "promocion";
$tdatasliders[".printFields"][] = "imagen";
$tdatasliders[".printFields"][] = "clase";

//	slider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "slider";
	$fdata["GoodName"] = "slider";
	$fdata["ownerTable"] = "sliders";
	$fdata["Label"] = GetFieldLabel("sliders","slider"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "slider"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "slider";
	
		
		
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

	

	
	$tdatasliders["slider"] = $fdata;
//	promocion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "promocion";
	$fdata["GoodName"] = "promocion";
	$fdata["ownerTable"] = "sliders";
	$fdata["Label"] = GetFieldLabel("sliders","promocion"); 
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatasliders["promocion"] = $fdata;
//	imagen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "imagen";
	$fdata["GoodName"] = "imagen";
	$fdata["ownerTable"] = "sliders";
	$fdata["Label"] = GetFieldLabel("sliders","imagen"); 
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
	
	
	
	

	

	
	$tdatasliders["imagen"] = $fdata;
//	clase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "clase";
	$fdata["GoodName"] = "clase";
	$fdata["ownerTable"] = "sliders";
	$fdata["Label"] = GetFieldLabel("sliders","clase"); 
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
	
		$fdata["strField"] = "clase"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clase";
	
		
		
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

	

	
	$tdatasliders["clase"] = $fdata;

	
$tables_data["sliders"]=&$tdatasliders;
$field_labels["sliders"] = &$fieldLabelssliders;
$fieldToolTips["sliders"] = &$fieldToolTipssliders;
$page_titles["sliders"] = &$pageTitlessliders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sliders"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["sliders"] = array();


	
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
					$masterTablesData["sliders"][0] = $masterParams;	
				$masterTablesData["sliders"][0]["masterKeys"] = array();
	$masterTablesData["sliders"][0]["masterKeys"][]="promocion";
				$masterTablesData["sliders"][0]["detailKeys"] = array();
	$masterTablesData["sliders"][0]["detailKeys"][]="promocion";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sliders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "slider,  	promocion,  	imagen,  	clase";
$proto0["m_strFrom"] = "FROM sliders";
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
	"m_strName" => "slider",
	"m_strTable" => "sliders",
	"m_srcTableName" => "sliders"
));

$proto5["m_sql"] = "slider";
$proto5["m_srcTableName"] = "sliders";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "promocion",
	"m_strTable" => "sliders",
	"m_srcTableName" => "sliders"
));

$proto7["m_sql"] = "promocion";
$proto7["m_srcTableName"] = "sliders";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "imagen",
	"m_strTable" => "sliders",
	"m_srcTableName" => "sliders"
));

$proto9["m_sql"] = "imagen";
$proto9["m_srcTableName"] = "sliders";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "clase",
	"m_strTable" => "sliders",
	"m_srcTableName" => "sliders"
));

$proto11["m_sql"] = "clase";
$proto11["m_srcTableName"] = "sliders";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "sliders";
$proto14["m_srcTableName"] = "sliders";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "slider";
$proto14["m_columns"][] = "promocion";
$proto14["m_columns"][] = "imagen";
$proto14["m_columns"][] = "clase";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "sliders";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "sliders";
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
$proto0["m_srcTableName"]="sliders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sliders = createSqlQuery_sliders();


	
				
	
$tdatasliders[".sqlquery"] = $queryData_sliders;

$tableEvents["sliders"] = new eventsBase;
$tdatasliders[".hasEvents"] = false;

?>