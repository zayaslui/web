<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadetalles = array();	
	$tdatadetalles[".truncateText"] = true;
	$tdatadetalles[".NumberOfChars"] = 80; 
	$tdatadetalles[".ShortName"] = "detalles";
	$tdatadetalles[".OwnerID"] = "";
	$tdatadetalles[".OriginalTable"] = "detalles";

//	field labels
$fieldLabelsdetalles = array();
$fieldToolTipsdetalles = array();
$pageTitlesdetalles = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalles["Spanish"] = array();
	$fieldToolTipsdetalles["Spanish"] = array();
	$pageTitlesdetalles["Spanish"] = array();
	$fieldLabelsdetalles["Spanish"]["detalle"] = "Detalle";
	$fieldToolTipsdetalles["Spanish"]["detalle"] = "";
	$fieldLabelsdetalles["Spanish"]["promocion"] = "Promocion";
	$fieldToolTipsdetalles["Spanish"]["promocion"] = "";
	$fieldLabelsdetalles["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsdetalles["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsdetalles["Spanish"]))
		$tdatadetalles[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdetalles[""] = array();
	$fieldToolTipsdetalles[""] = array();
	$pageTitlesdetalles[""] = array();
	$fieldLabelsdetalles[""]["detalle"] = "Detalle";
	$fieldToolTipsdetalles[""]["detalle"] = "";
	$fieldLabelsdetalles[""]["promocion"] = "Promocion";
	$fieldToolTipsdetalles[""]["promocion"] = "";
	$fieldLabelsdetalles[""]["descripcion"] = "Descripcion";
	$fieldToolTipsdetalles[""]["descripcion"] = "";
	if (count($fieldToolTipsdetalles[""]))
		$tdatadetalles[".isUseToolTips"] = true;
}
	
	
	$tdatadetalles[".NCSearch"] = true;



$tdatadetalles[".shortTableName"] = "detalles";
$tdatadetalles[".nSecOptions"] = 0;
$tdatadetalles[".recsPerRowList"] = 1;
$tdatadetalles[".recsPerRowPrint"] = 1;
$tdatadetalles[".mainTableOwnerID"] = "";
$tdatadetalles[".moveNext"] = 1;
$tdatadetalles[".entityType"] = 0;

$tdatadetalles[".strOriginalTableName"] = "detalles";




$tdatadetalles[".showAddInPopup"] = false;

$tdatadetalles[".showEditInPopup"] = false;

$tdatadetalles[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadetalles[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadetalles[".fieldsForRegister"] = array();

$tdatadetalles[".listAjax"] = false;

	$tdatadetalles[".audit"] = false;

	$tdatadetalles[".locking"] = false;

$tdatadetalles[".edit"] = true;
$tdatadetalles[".afterEditAction"] = 1;
$tdatadetalles[".closePopupAfterEdit"] = 1;
$tdatadetalles[".afterEditActionDetTable"] = "";

$tdatadetalles[".add"] = true;
$tdatadetalles[".afterAddAction"] = 1;
$tdatadetalles[".closePopupAfterAdd"] = 1;
$tdatadetalles[".afterAddActionDetTable"] = "";

$tdatadetalles[".list"] = true;

$tdatadetalles[".inlineEdit"] = true;
$tdatadetalles[".view"] = true;

$tdatadetalles[".import"] = true;

$tdatadetalles[".exportTo"] = true;

$tdatadetalles[".printFriendly"] = true;

$tdatadetalles[".delete"] = true;

$tdatadetalles[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadetalles[".searchSaving"] = false;
//

$tdatadetalles[".showSearchPanel"] = true;
		$tdatadetalles[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadetalles[".isUseAjaxSuggest"] = false;
else 
	$tdatadetalles[".isUseAjaxSuggest"] = true;

$tdatadetalles[".rowHighlite"] = true;



$tdatadetalles[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalles[".isUseTimeForSearch"] = false;





$tdatadetalles[".allSearchFields"] = array();
$tdatadetalles[".filterFields"] = array();
$tdatadetalles[".requiredSearchFields"] = array();

$tdatadetalles[".allSearchFields"][] = "detalle";
	$tdatadetalles[".allSearchFields"][] = "promocion";
	$tdatadetalles[".allSearchFields"][] = "descripcion";
	

$tdatadetalles[".googleLikeFields"] = array();
$tdatadetalles[".googleLikeFields"][] = "detalle";
$tdatadetalles[".googleLikeFields"][] = "promocion";
$tdatadetalles[".googleLikeFields"][] = "descripcion";


$tdatadetalles[".advSearchFields"] = array();
$tdatadetalles[".advSearchFields"][] = "detalle";
$tdatadetalles[".advSearchFields"][] = "promocion";
$tdatadetalles[".advSearchFields"][] = "descripcion";

$tdatadetalles[".tableType"] = "list";

$tdatadetalles[".printerPageOrientation"] = 0;
$tdatadetalles[".nPrinterPageScale"] = 100;

$tdatadetalles[".nPrinterSplitRecords"] = 40;

$tdatadetalles[".nPrinterPDFSplitRecords"] = 40;



$tdatadetalles[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatadetalles[".pageSize"] = 20;

$tdatadetalles[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetalles[".strOrderBy"] = $tstrOrderBy;

$tdatadetalles[".orderindexes"] = array();

$tdatadetalles[".sqlHead"] = "SELECT detalle,  	promocion,  	descripcion";
$tdatadetalles[".sqlFrom"] = "FROM detalles";
$tdatadetalles[".sqlWhereExpr"] = "";
$tdatadetalles[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalles[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalles[".highlightSearchResults"] = true;

$tableKeysdetalles = array();
$tableKeysdetalles[] = "detalle";
$tdatadetalles[".Keys"] = $tableKeysdetalles;

$tdatadetalles[".listFields"] = array();
$tdatadetalles[".listFields"][] = "detalle";
$tdatadetalles[".listFields"][] = "promocion";
$tdatadetalles[".listFields"][] = "descripcion";

$tdatadetalles[".hideMobileList"] = array();


$tdatadetalles[".viewFields"] = array();
$tdatadetalles[".viewFields"][] = "detalle";
$tdatadetalles[".viewFields"][] = "promocion";
$tdatadetalles[".viewFields"][] = "descripcion";

$tdatadetalles[".addFields"] = array();
$tdatadetalles[".addFields"][] = "promocion";
$tdatadetalles[".addFields"][] = "descripcion";

$tdatadetalles[".masterListFields"] = array();
$tdatadetalles[".masterListFields"][] = "detalle";
$tdatadetalles[".masterListFields"][] = "promocion";
$tdatadetalles[".masterListFields"][] = "descripcion";

$tdatadetalles[".inlineAddFields"] = array();
$tdatadetalles[".inlineAddFields"][] = "promocion";
$tdatadetalles[".inlineAddFields"][] = "descripcion";

$tdatadetalles[".editFields"] = array();
$tdatadetalles[".editFields"][] = "promocion";
$tdatadetalles[".editFields"][] = "descripcion";

$tdatadetalles[".inlineEditFields"] = array();
$tdatadetalles[".inlineEditFields"][] = "promocion";
$tdatadetalles[".inlineEditFields"][] = "descripcion";

$tdatadetalles[".exportFields"] = array();
$tdatadetalles[".exportFields"][] = "detalle";
$tdatadetalles[".exportFields"][] = "promocion";
$tdatadetalles[".exportFields"][] = "descripcion";

$tdatadetalles[".importFields"] = array();
$tdatadetalles[".importFields"][] = "detalle";
$tdatadetalles[".importFields"][] = "promocion";
$tdatadetalles[".importFields"][] = "descripcion";

$tdatadetalles[".printFields"] = array();
$tdatadetalles[".printFields"][] = "detalle";
$tdatadetalles[".printFields"][] = "promocion";
$tdatadetalles[".printFields"][] = "descripcion";

//	detalle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "detalle";
	$fdata["GoodName"] = "detalle";
	$fdata["ownerTable"] = "detalles";
	$fdata["Label"] = GetFieldLabel("detalles","detalle"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "detalle"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detalle";
	
		
		
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

	

	
	$tdatadetalles["detalle"] = $fdata;
//	promocion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "promocion";
	$fdata["GoodName"] = "promocion";
	$fdata["ownerTable"] = "detalles";
	$fdata["Label"] = GetFieldLabel("detalles","promocion"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "promociones";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "promocion";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "promocion";
	
		
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

	

	
	$tdatadetalles["promocion"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "detalles";
	$fdata["Label"] = GetFieldLabel("detalles","descripcion"); 
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

	

	
	$tdatadetalles["descripcion"] = $fdata;

	
$tables_data["detalles"]=&$tdatadetalles;
$field_labels["detalles"] = &$fieldLabelsdetalles;
$fieldToolTips["detalles"] = &$fieldToolTipsdetalles;
$page_titles["detalles"] = &$pageTitlesdetalles;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detalles"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["detalles"] = array();


	
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
					$masterTablesData["detalles"][0] = $masterParams;	
				$masterTablesData["detalles"][0]["masterKeys"] = array();
	$masterTablesData["detalles"][0]["masterKeys"][]="promocion";
				$masterTablesData["detalles"][0]["detailKeys"] = array();
	$masterTablesData["detalles"][0]["detailKeys"][]="promocion";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_detalles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "detalle,  	promocion,  	descripcion";
$proto0["m_strFrom"] = "FROM detalles";
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
	"m_strName" => "detalle",
	"m_strTable" => "detalles",
	"m_srcTableName" => "detalles"
));

$proto5["m_sql"] = "detalle";
$proto5["m_srcTableName"] = "detalles";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "promocion",
	"m_strTable" => "detalles",
	"m_srcTableName" => "detalles"
));

$proto7["m_sql"] = "promocion";
$proto7["m_srcTableName"] = "detalles";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "detalles",
	"m_srcTableName" => "detalles"
));

$proto9["m_sql"] = "descripcion";
$proto9["m_srcTableName"] = "detalles";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "detalles";
$proto12["m_srcTableName"] = "detalles";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "detalle";
$proto12["m_columns"][] = "promocion";
$proto12["m_columns"][] = "descripcion";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "detalles";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "detalles";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="detalles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalles = createSqlQuery_detalles();


	
			
	
$tdatadetalles[".sqlquery"] = $queryData_detalles;

$tableEvents["detalles"] = new eventsBase;
$tdatadetalles[".hasEvents"] = false;

?>