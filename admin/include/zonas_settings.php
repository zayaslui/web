<?php
require_once(getabspath("classes/cipherer.php"));




$tdatazonas = array();	
	$tdatazonas[".truncateText"] = true;
	$tdatazonas[".NumberOfChars"] = 80; 
	$tdatazonas[".ShortName"] = "zonas";
	$tdatazonas[".OwnerID"] = "";
	$tdatazonas[".OriginalTable"] = "zonas";

//	field labels
$fieldLabelszonas = array();
$fieldToolTipszonas = array();
$pageTitleszonas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelszonas["Spanish"] = array();
	$fieldToolTipszonas["Spanish"] = array();
	$pageTitleszonas["Spanish"] = array();
	$fieldLabelszonas["Spanish"]["zona"] = "Zona";
	$fieldToolTipszonas["Spanish"]["zona"] = "";
	$fieldLabelszonas["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipszonas["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipszonas["Spanish"]))
		$tdatazonas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelszonas[""] = array();
	$fieldToolTipszonas[""] = array();
	$pageTitleszonas[""] = array();
	$fieldLabelszonas[""]["zona"] = "Zona";
	$fieldToolTipszonas[""]["zona"] = "";
	$fieldLabelszonas[""]["descripcion"] = "Descripcion";
	$fieldToolTipszonas[""]["descripcion"] = "";
	if (count($fieldToolTipszonas[""]))
		$tdatazonas[".isUseToolTips"] = true;
}
	
	
	$tdatazonas[".NCSearch"] = true;



$tdatazonas[".shortTableName"] = "zonas";
$tdatazonas[".nSecOptions"] = 0;
$tdatazonas[".recsPerRowList"] = 1;
$tdatazonas[".recsPerRowPrint"] = 1;
$tdatazonas[".mainTableOwnerID"] = "";
$tdatazonas[".moveNext"] = 1;
$tdatazonas[".entityType"] = 0;

$tdatazonas[".strOriginalTableName"] = "zonas";




$tdatazonas[".showAddInPopup"] = false;

$tdatazonas[".showEditInPopup"] = false;

$tdatazonas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazonas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazonas[".fieldsForRegister"] = array();

$tdatazonas[".listAjax"] = false;

	$tdatazonas[".audit"] = false;

	$tdatazonas[".locking"] = false;

$tdatazonas[".edit"] = true;
$tdatazonas[".afterEditAction"] = 1;
$tdatazonas[".closePopupAfterEdit"] = 1;
$tdatazonas[".afterEditActionDetTable"] = "";

$tdatazonas[".add"] = true;
$tdatazonas[".afterAddAction"] = 1;
$tdatazonas[".closePopupAfterAdd"] = 1;
$tdatazonas[".afterAddActionDetTable"] = "";

$tdatazonas[".list"] = true;

$tdatazonas[".inlineEdit"] = true;
$tdatazonas[".inlineAdd"] = true;
$tdatazonas[".view"] = true;

$tdatazonas[".import"] = true;

$tdatazonas[".exportTo"] = true;

$tdatazonas[".printFriendly"] = true;

$tdatazonas[".delete"] = true;

$tdatazonas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatazonas[".searchSaving"] = false;
//

$tdatazonas[".showSearchPanel"] = true;
		$tdatazonas[".flexibleSearch"] = true;		

if (isMobile())
	$tdatazonas[".isUseAjaxSuggest"] = false;
else 
	$tdatazonas[".isUseAjaxSuggest"] = true;

$tdatazonas[".rowHighlite"] = true;



$tdatazonas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazonas[".isUseTimeForSearch"] = false;





$tdatazonas[".allSearchFields"] = array();
$tdatazonas[".filterFields"] = array();
$tdatazonas[".requiredSearchFields"] = array();

$tdatazonas[".allSearchFields"][] = "zona";
	$tdatazonas[".allSearchFields"][] = "descripcion";
	

$tdatazonas[".googleLikeFields"] = array();
$tdatazonas[".googleLikeFields"][] = "zona";
$tdatazonas[".googleLikeFields"][] = "descripcion";


$tdatazonas[".advSearchFields"] = array();
$tdatazonas[".advSearchFields"][] = "zona";
$tdatazonas[".advSearchFields"][] = "descripcion";

$tdatazonas[".tableType"] = "list";

$tdatazonas[".printerPageOrientation"] = 0;
$tdatazonas[".nPrinterPageScale"] = 100;

$tdatazonas[".nPrinterSplitRecords"] = 40;

$tdatazonas[".nPrinterPDFSplitRecords"] = 40;



$tdatazonas[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatazonas[".pageSize"] = 20;

$tdatazonas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazonas[".strOrderBy"] = $tstrOrderBy;

$tdatazonas[".orderindexes"] = array();

$tdatazonas[".sqlHead"] = "SELECT zona,  	descripcion";
$tdatazonas[".sqlFrom"] = "FROM zonas";
$tdatazonas[".sqlWhereExpr"] = "";
$tdatazonas[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazonas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazonas[".arrGroupsPerPage"] = $arrGPP;

$tdatazonas[".highlightSearchResults"] = true;

$tableKeyszonas = array();
$tableKeyszonas[] = "zona";
$tdatazonas[".Keys"] = $tableKeyszonas;

$tdatazonas[".listFields"] = array();
$tdatazonas[".listFields"][] = "zona";
$tdatazonas[".listFields"][] = "descripcion";

$tdatazonas[".hideMobileList"] = array();


$tdatazonas[".viewFields"] = array();
$tdatazonas[".viewFields"][] = "zona";
$tdatazonas[".viewFields"][] = "descripcion";

$tdatazonas[".addFields"] = array();
$tdatazonas[".addFields"][] = "descripcion";

$tdatazonas[".masterListFields"] = array();
$tdatazonas[".masterListFields"][] = "zona";
$tdatazonas[".masterListFields"][] = "descripcion";

$tdatazonas[".inlineAddFields"] = array();
$tdatazonas[".inlineAddFields"][] = "descripcion";

$tdatazonas[".editFields"] = array();
$tdatazonas[".editFields"][] = "descripcion";

$tdatazonas[".inlineEditFields"] = array();
$tdatazonas[".inlineEditFields"][] = "descripcion";

$tdatazonas[".exportFields"] = array();
$tdatazonas[".exportFields"][] = "zona";
$tdatazonas[".exportFields"][] = "descripcion";

$tdatazonas[".importFields"] = array();
$tdatazonas[".importFields"][] = "zona";
$tdatazonas[".importFields"][] = "descripcion";

$tdatazonas[".printFields"] = array();
$tdatazonas[".printFields"][] = "zona";
$tdatazonas[".printFields"][] = "descripcion";

//	zona
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "zona";
	$fdata["GoodName"] = "zona";
	$fdata["ownerTable"] = "zonas";
	$fdata["Label"] = GetFieldLabel("zonas","zona"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatazonas["zona"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "zonas";
	$fdata["Label"] = GetFieldLabel("zonas","descripcion"); 
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

	

	
	$tdatazonas["descripcion"] = $fdata;

	
$tables_data["zonas"]=&$tdatazonas;
$field_labels["zonas"] = &$fieldLabelszonas;
$fieldToolTips["zonas"] = &$fieldToolTipszonas;
$page_titles["zonas"] = &$pageTitleszonas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zonas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["zonas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_zonas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "zona,  	descripcion";
$proto0["m_strFrom"] = "FROM zonas";
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
	"m_strName" => "zona",
	"m_strTable" => "zonas",
	"m_srcTableName" => "zonas"
));

$proto5["m_sql"] = "zona";
$proto5["m_srcTableName"] = "zonas";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "zonas",
	"m_srcTableName" => "zonas"
));

$proto7["m_sql"] = "descripcion";
$proto7["m_srcTableName"] = "zonas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "zonas";
$proto10["m_srcTableName"] = "zonas";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "zona";
$proto10["m_columns"][] = "descripcion";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "zonas";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "zonas";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="zonas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zonas = createSqlQuery_zonas();


	
		
	
$tdatazonas[".sqlquery"] = $queryData_zonas;

$tableEvents["zonas"] = new eventsBase;
$tdatazonas[".hasEvents"] = false;

?>