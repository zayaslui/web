<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamonedas = array();	
	$tdatamonedas[".truncateText"] = true;
	$tdatamonedas[".NumberOfChars"] = 80; 
	$tdatamonedas[".ShortName"] = "monedas";
	$tdatamonedas[".OwnerID"] = "";
	$tdatamonedas[".OriginalTable"] = "monedas";

//	field labels
$fieldLabelsmonedas = array();
$fieldToolTipsmonedas = array();
$pageTitlesmonedas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmonedas["Spanish"] = array();
	$fieldToolTipsmonedas["Spanish"] = array();
	$pageTitlesmonedas["Spanish"] = array();
	$fieldLabelsmonedas["Spanish"]["moneda"] = "Moneda";
	$fieldToolTipsmonedas["Spanish"]["moneda"] = "";
	$fieldLabelsmonedas["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsmonedas["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsmonedas["Spanish"]))
		$tdatamonedas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmonedas[""] = array();
	$fieldToolTipsmonedas[""] = array();
	$pageTitlesmonedas[""] = array();
	$fieldLabelsmonedas[""]["moneda"] = "Moneda";
	$fieldToolTipsmonedas[""]["moneda"] = "";
	$fieldLabelsmonedas[""]["descripcion"] = "Descripcion";
	$fieldToolTipsmonedas[""]["descripcion"] = "";
	if (count($fieldToolTipsmonedas[""]))
		$tdatamonedas[".isUseToolTips"] = true;
}
	
	
	$tdatamonedas[".NCSearch"] = true;



$tdatamonedas[".shortTableName"] = "monedas";
$tdatamonedas[".nSecOptions"] = 0;
$tdatamonedas[".recsPerRowList"] = 1;
$tdatamonedas[".recsPerRowPrint"] = 1;
$tdatamonedas[".mainTableOwnerID"] = "";
$tdatamonedas[".moveNext"] = 1;
$tdatamonedas[".entityType"] = 0;

$tdatamonedas[".strOriginalTableName"] = "monedas";




$tdatamonedas[".showAddInPopup"] = false;

$tdatamonedas[".showEditInPopup"] = false;

$tdatamonedas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamonedas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamonedas[".fieldsForRegister"] = array();

$tdatamonedas[".listAjax"] = false;

	$tdatamonedas[".audit"] = false;

	$tdatamonedas[".locking"] = false;

$tdatamonedas[".edit"] = true;
$tdatamonedas[".afterEditAction"] = 1;
$tdatamonedas[".closePopupAfterEdit"] = 1;
$tdatamonedas[".afterEditActionDetTable"] = "";

$tdatamonedas[".add"] = true;
$tdatamonedas[".afterAddAction"] = 1;
$tdatamonedas[".closePopupAfterAdd"] = 1;
$tdatamonedas[".afterAddActionDetTable"] = "";

$tdatamonedas[".list"] = true;

$tdatamonedas[".inlineEdit"] = true;
$tdatamonedas[".view"] = true;

$tdatamonedas[".import"] = true;

$tdatamonedas[".exportTo"] = true;

$tdatamonedas[".printFriendly"] = true;

$tdatamonedas[".delete"] = true;

$tdatamonedas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamonedas[".searchSaving"] = false;
//

$tdatamonedas[".showSearchPanel"] = true;
		$tdatamonedas[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamonedas[".isUseAjaxSuggest"] = false;
else 
	$tdatamonedas[".isUseAjaxSuggest"] = true;

$tdatamonedas[".rowHighlite"] = true;



$tdatamonedas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamonedas[".isUseTimeForSearch"] = false;





$tdatamonedas[".allSearchFields"] = array();
$tdatamonedas[".filterFields"] = array();
$tdatamonedas[".requiredSearchFields"] = array();

$tdatamonedas[".allSearchFields"][] = "moneda";
	$tdatamonedas[".allSearchFields"][] = "descripcion";
	

$tdatamonedas[".googleLikeFields"] = array();
$tdatamonedas[".googleLikeFields"][] = "moneda";
$tdatamonedas[".googleLikeFields"][] = "descripcion";


$tdatamonedas[".advSearchFields"] = array();
$tdatamonedas[".advSearchFields"][] = "moneda";
$tdatamonedas[".advSearchFields"][] = "descripcion";

$tdatamonedas[".tableType"] = "list";

$tdatamonedas[".printerPageOrientation"] = 0;
$tdatamonedas[".nPrinterPageScale"] = 100;

$tdatamonedas[".nPrinterSplitRecords"] = 40;

$tdatamonedas[".nPrinterPDFSplitRecords"] = 40;



$tdatamonedas[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatamonedas[".pageSize"] = 20;

$tdatamonedas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamonedas[".strOrderBy"] = $tstrOrderBy;

$tdatamonedas[".orderindexes"] = array();

$tdatamonedas[".sqlHead"] = "SELECT moneda,  	descripcion";
$tdatamonedas[".sqlFrom"] = "FROM monedas";
$tdatamonedas[".sqlWhereExpr"] = "";
$tdatamonedas[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamonedas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamonedas[".arrGroupsPerPage"] = $arrGPP;

$tdatamonedas[".highlightSearchResults"] = true;

$tableKeysmonedas = array();
$tableKeysmonedas[] = "moneda";
$tdatamonedas[".Keys"] = $tableKeysmonedas;

$tdatamonedas[".listFields"] = array();
$tdatamonedas[".listFields"][] = "moneda";
$tdatamonedas[".listFields"][] = "descripcion";

$tdatamonedas[".hideMobileList"] = array();


$tdatamonedas[".viewFields"] = array();
$tdatamonedas[".viewFields"][] = "moneda";
$tdatamonedas[".viewFields"][] = "descripcion";

$tdatamonedas[".addFields"] = array();
$tdatamonedas[".addFields"][] = "descripcion";

$tdatamonedas[".masterListFields"] = array();
$tdatamonedas[".masterListFields"][] = "moneda";
$tdatamonedas[".masterListFields"][] = "descripcion";

$tdatamonedas[".inlineAddFields"] = array();
$tdatamonedas[".inlineAddFields"][] = "descripcion";

$tdatamonedas[".editFields"] = array();
$tdatamonedas[".editFields"][] = "descripcion";

$tdatamonedas[".inlineEditFields"] = array();
$tdatamonedas[".inlineEditFields"][] = "descripcion";

$tdatamonedas[".exportFields"] = array();
$tdatamonedas[".exportFields"][] = "moneda";
$tdatamonedas[".exportFields"][] = "descripcion";

$tdatamonedas[".importFields"] = array();
$tdatamonedas[".importFields"][] = "moneda";
$tdatamonedas[".importFields"][] = "descripcion";

$tdatamonedas[".printFields"] = array();
$tdatamonedas[".printFields"][] = "moneda";
$tdatamonedas[".printFields"][] = "descripcion";

//	moneda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "moneda";
	$fdata["GoodName"] = "moneda";
	$fdata["ownerTable"] = "monedas";
	$fdata["Label"] = GetFieldLabel("monedas","moneda"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatamonedas["moneda"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "monedas";
	$fdata["Label"] = GetFieldLabel("monedas","descripcion"); 
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

	

	
	$tdatamonedas["descripcion"] = $fdata;

	
$tables_data["monedas"]=&$tdatamonedas;
$field_labels["monedas"] = &$fieldLabelsmonedas;
$fieldToolTips["monedas"] = &$fieldToolTipsmonedas;
$page_titles["monedas"] = &$pageTitlesmonedas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["monedas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["monedas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_monedas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "moneda,  	descripcion";
$proto0["m_strFrom"] = "FROM monedas";
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
	"m_strName" => "moneda",
	"m_strTable" => "monedas",
	"m_srcTableName" => "monedas"
));

$proto5["m_sql"] = "moneda";
$proto5["m_srcTableName"] = "monedas";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "monedas",
	"m_srcTableName" => "monedas"
));

$proto7["m_sql"] = "descripcion";
$proto7["m_srcTableName"] = "monedas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "monedas";
$proto10["m_srcTableName"] = "monedas";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "moneda";
$proto10["m_columns"][] = "descripcion";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "monedas";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "monedas";
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
$proto0["m_srcTableName"]="monedas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_monedas = createSqlQuery_monedas();


	
		
	
$tdatamonedas[".sqlquery"] = $queryData_monedas;

$tableEvents["monedas"] = new eventsBase;
$tdatamonedas[".hasEvents"] = false;

?>