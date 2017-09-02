<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadestinos = array();	
	$tdatadestinos[".truncateText"] = true;
	$tdatadestinos[".NumberOfChars"] = 80; 
	$tdatadestinos[".ShortName"] = "destinos";
	$tdatadestinos[".OwnerID"] = "";
	$tdatadestinos[".OriginalTable"] = "destinos";

//	field labels
$fieldLabelsdestinos = array();
$fieldToolTipsdestinos = array();
$pageTitlesdestinos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdestinos["Spanish"] = array();
	$fieldToolTipsdestinos["Spanish"] = array();
	$pageTitlesdestinos["Spanish"] = array();
	$fieldLabelsdestinos["Spanish"]["destino"] = "Destino";
	$fieldToolTipsdestinos["Spanish"]["destino"] = "";
	$fieldLabelsdestinos["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsdestinos["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsdestinos["Spanish"]))
		$tdatadestinos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdestinos[""] = array();
	$fieldToolTipsdestinos[""] = array();
	$pageTitlesdestinos[""] = array();
	$fieldLabelsdestinos[""]["destino"] = "Destino";
	$fieldToolTipsdestinos[""]["destino"] = "";
	$fieldLabelsdestinos[""]["descripcion"] = "Descripcion";
	$fieldToolTipsdestinos[""]["descripcion"] = "";
	if (count($fieldToolTipsdestinos[""]))
		$tdatadestinos[".isUseToolTips"] = true;
}
	
	
	$tdatadestinos[".NCSearch"] = true;



$tdatadestinos[".shortTableName"] = "destinos";
$tdatadestinos[".nSecOptions"] = 0;
$tdatadestinos[".recsPerRowList"] = 1;
$tdatadestinos[".recsPerRowPrint"] = 1;
$tdatadestinos[".mainTableOwnerID"] = "";
$tdatadestinos[".moveNext"] = 1;
$tdatadestinos[".entityType"] = 0;

$tdatadestinos[".strOriginalTableName"] = "destinos";




$tdatadestinos[".showAddInPopup"] = false;

$tdatadestinos[".showEditInPopup"] = false;

$tdatadestinos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadestinos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadestinos[".fieldsForRegister"] = array();

$tdatadestinos[".listAjax"] = false;

	$tdatadestinos[".audit"] = false;

	$tdatadestinos[".locking"] = false;

$tdatadestinos[".edit"] = true;
$tdatadestinos[".afterEditAction"] = 1;
$tdatadestinos[".closePopupAfterEdit"] = 1;
$tdatadestinos[".afterEditActionDetTable"] = "";

$tdatadestinos[".add"] = true;
$tdatadestinos[".afterAddAction"] = 1;
$tdatadestinos[".closePopupAfterAdd"] = 1;
$tdatadestinos[".afterAddActionDetTable"] = "";

$tdatadestinos[".list"] = true;

$tdatadestinos[".inlineEdit"] = true;
$tdatadestinos[".view"] = true;

$tdatadestinos[".import"] = true;

$tdatadestinos[".exportTo"] = true;

$tdatadestinos[".printFriendly"] = true;

$tdatadestinos[".delete"] = true;

$tdatadestinos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadestinos[".searchSaving"] = false;
//

$tdatadestinos[".showSearchPanel"] = true;
		$tdatadestinos[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadestinos[".isUseAjaxSuggest"] = false;
else 
	$tdatadestinos[".isUseAjaxSuggest"] = true;

$tdatadestinos[".rowHighlite"] = true;



$tdatadestinos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadestinos[".isUseTimeForSearch"] = false;





$tdatadestinos[".allSearchFields"] = array();
$tdatadestinos[".filterFields"] = array();
$tdatadestinos[".requiredSearchFields"] = array();

$tdatadestinos[".allSearchFields"][] = "destino";
	$tdatadestinos[".allSearchFields"][] = "descripcion";
	

$tdatadestinos[".googleLikeFields"] = array();
$tdatadestinos[".googleLikeFields"][] = "destino";
$tdatadestinos[".googleLikeFields"][] = "descripcion";


$tdatadestinos[".advSearchFields"] = array();
$tdatadestinos[".advSearchFields"][] = "destino";
$tdatadestinos[".advSearchFields"][] = "descripcion";

$tdatadestinos[".tableType"] = "list";

$tdatadestinos[".printerPageOrientation"] = 0;
$tdatadestinos[".nPrinterPageScale"] = 100;

$tdatadestinos[".nPrinterSplitRecords"] = 40;

$tdatadestinos[".nPrinterPDFSplitRecords"] = 40;



$tdatadestinos[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatadestinos[".pageSize"] = 20;

$tdatadestinos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadestinos[".strOrderBy"] = $tstrOrderBy;

$tdatadestinos[".orderindexes"] = array();

$tdatadestinos[".sqlHead"] = "SELECT destino,  	descripcion";
$tdatadestinos[".sqlFrom"] = "FROM destinos";
$tdatadestinos[".sqlWhereExpr"] = "";
$tdatadestinos[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadestinos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadestinos[".arrGroupsPerPage"] = $arrGPP;

$tdatadestinos[".highlightSearchResults"] = true;

$tableKeysdestinos = array();
$tableKeysdestinos[] = "destino";
$tdatadestinos[".Keys"] = $tableKeysdestinos;

$tdatadestinos[".listFields"] = array();
$tdatadestinos[".listFields"][] = "destino";
$tdatadestinos[".listFields"][] = "descripcion";

$tdatadestinos[".hideMobileList"] = array();


$tdatadestinos[".viewFields"] = array();
$tdatadestinos[".viewFields"][] = "destino";
$tdatadestinos[".viewFields"][] = "descripcion";

$tdatadestinos[".addFields"] = array();
$tdatadestinos[".addFields"][] = "descripcion";

$tdatadestinos[".masterListFields"] = array();
$tdatadestinos[".masterListFields"][] = "destino";
$tdatadestinos[".masterListFields"][] = "descripcion";

$tdatadestinos[".inlineAddFields"] = array();
$tdatadestinos[".inlineAddFields"][] = "descripcion";

$tdatadestinos[".editFields"] = array();
$tdatadestinos[".editFields"][] = "descripcion";

$tdatadestinos[".inlineEditFields"] = array();
$tdatadestinos[".inlineEditFields"][] = "descripcion";

$tdatadestinos[".exportFields"] = array();
$tdatadestinos[".exportFields"][] = "destino";
$tdatadestinos[".exportFields"][] = "descripcion";

$tdatadestinos[".importFields"] = array();
$tdatadestinos[".importFields"][] = "destino";
$tdatadestinos[".importFields"][] = "descripcion";

$tdatadestinos[".printFields"] = array();
$tdatadestinos[".printFields"][] = "destino";
$tdatadestinos[".printFields"][] = "descripcion";

//	destino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "destino";
	$fdata["GoodName"] = "destino";
	$fdata["ownerTable"] = "destinos";
	$fdata["Label"] = GetFieldLabel("destinos","destino"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatadestinos["destino"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "destinos";
	$fdata["Label"] = GetFieldLabel("destinos","descripcion"); 
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

	

	
	$tdatadestinos["descripcion"] = $fdata;

	
$tables_data["destinos"]=&$tdatadestinos;
$field_labels["destinos"] = &$fieldLabelsdestinos;
$fieldToolTips["destinos"] = &$fieldToolTipsdestinos;
$page_titles["destinos"] = &$pageTitlesdestinos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["destinos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["destinos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_destinos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "destino,  	descripcion";
$proto0["m_strFrom"] = "FROM destinos";
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
	"m_strName" => "destino",
	"m_strTable" => "destinos",
	"m_srcTableName" => "destinos"
));

$proto5["m_sql"] = "destino";
$proto5["m_srcTableName"] = "destinos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "destinos",
	"m_srcTableName" => "destinos"
));

$proto7["m_sql"] = "descripcion";
$proto7["m_srcTableName"] = "destinos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "destinos";
$proto10["m_srcTableName"] = "destinos";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "destino";
$proto10["m_columns"][] = "descripcion";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "destinos";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "destinos";
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
$proto0["m_srcTableName"]="destinos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_destinos = createSqlQuery_destinos();


	
		
	
$tdatadestinos[".sqlquery"] = $queryData_destinos;

$tableEvents["destinos"] = new eventsBase;
$tdatadestinos[".hasEvents"] = false;

?>