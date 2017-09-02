<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausuarios = array();	
	$tdatausuarios[".truncateText"] = true;
	$tdatausuarios[".NumberOfChars"] = 80; 
	$tdatausuarios[".ShortName"] = "usuarios";
	$tdatausuarios[".OwnerID"] = "";
	$tdatausuarios[".OriginalTable"] = "usuarios";

//	field labels
$fieldLabelsusuarios = array();
$fieldToolTipsusuarios = array();
$pageTitlesusuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarios["Spanish"] = array();
	$fieldToolTipsusuarios["Spanish"] = array();
	$pageTitlesusuarios["Spanish"] = array();
	$fieldLabelsusuarios["Spanish"]["usuario"] = "Usuario";
	$fieldToolTipsusuarios["Spanish"]["usuario"] = "";
	$fieldLabelsusuarios["Spanish"]["nick"] = "Nick";
	$fieldToolTipsusuarios["Spanish"]["nick"] = "";
	$fieldLabelsusuarios["Spanish"]["password"] = "Password";
	$fieldToolTipsusuarios["Spanish"]["password"] = "";
	$fieldLabelsusuarios["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsusuarios["Spanish"]["nombre"] = "";
	if (count($fieldToolTipsusuarios["Spanish"]))
		$tdatausuarios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusuarios[""] = array();
	$fieldToolTipsusuarios[""] = array();
	$pageTitlesusuarios[""] = array();
	$fieldLabelsusuarios[""]["usuario"] = "Usuario";
	$fieldToolTipsusuarios[""]["usuario"] = "";
	$fieldLabelsusuarios[""]["nick"] = "Nick";
	$fieldToolTipsusuarios[""]["nick"] = "";
	$fieldLabelsusuarios[""]["password"] = "Password";
	$fieldToolTipsusuarios[""]["password"] = "";
	$fieldLabelsusuarios[""]["nombre"] = "Nombre";
	$fieldToolTipsusuarios[""]["nombre"] = "";
	if (count($fieldToolTipsusuarios[""]))
		$tdatausuarios[".isUseToolTips"] = true;
}
	
	
	$tdatausuarios[".NCSearch"] = true;



$tdatausuarios[".shortTableName"] = "usuarios";
$tdatausuarios[".nSecOptions"] = 0;
$tdatausuarios[".recsPerRowList"] = 1;
$tdatausuarios[".recsPerRowPrint"] = 1;
$tdatausuarios[".mainTableOwnerID"] = "";
$tdatausuarios[".moveNext"] = 1;
$tdatausuarios[".entityType"] = 0;

$tdatausuarios[".strOriginalTableName"] = "usuarios";




$tdatausuarios[".showAddInPopup"] = false;

$tdatausuarios[".showEditInPopup"] = false;

$tdatausuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausuarios[".fieldsForRegister"] = array();

$tdatausuarios[".listAjax"] = false;

	$tdatausuarios[".audit"] = false;

	$tdatausuarios[".locking"] = false;

$tdatausuarios[".edit"] = true;
$tdatausuarios[".afterEditAction"] = 1;
$tdatausuarios[".closePopupAfterEdit"] = 1;
$tdatausuarios[".afterEditActionDetTable"] = "";

$tdatausuarios[".add"] = true;
$tdatausuarios[".afterAddAction"] = 1;
$tdatausuarios[".closePopupAfterAdd"] = 1;
$tdatausuarios[".afterAddActionDetTable"] = "";

$tdatausuarios[".list"] = true;

$tdatausuarios[".inlineEdit"] = true;
$tdatausuarios[".view"] = true;

$tdatausuarios[".import"] = true;

$tdatausuarios[".exportTo"] = true;

$tdatausuarios[".printFriendly"] = true;

$tdatausuarios[".delete"] = true;

$tdatausuarios[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatausuarios[".searchSaving"] = false;
//

$tdatausuarios[".showSearchPanel"] = true;
		$tdatausuarios[".flexibleSearch"] = true;		

if (isMobile())
	$tdatausuarios[".isUseAjaxSuggest"] = false;
else 
	$tdatausuarios[".isUseAjaxSuggest"] = true;

$tdatausuarios[".rowHighlite"] = true;



$tdatausuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios[".isUseTimeForSearch"] = false;





$tdatausuarios[".allSearchFields"] = array();
$tdatausuarios[".filterFields"] = array();
$tdatausuarios[".requiredSearchFields"] = array();

$tdatausuarios[".allSearchFields"][] = "usuario";
	$tdatausuarios[".allSearchFields"][] = "nick";
	$tdatausuarios[".allSearchFields"][] = "password";
	$tdatausuarios[".allSearchFields"][] = "nombre";
	

$tdatausuarios[".googleLikeFields"] = array();
$tdatausuarios[".googleLikeFields"][] = "usuario";
$tdatausuarios[".googleLikeFields"][] = "nick";
$tdatausuarios[".googleLikeFields"][] = "password";
$tdatausuarios[".googleLikeFields"][] = "nombre";


$tdatausuarios[".advSearchFields"] = array();
$tdatausuarios[".advSearchFields"][] = "usuario";
$tdatausuarios[".advSearchFields"][] = "nick";
$tdatausuarios[".advSearchFields"][] = "password";
$tdatausuarios[".advSearchFields"][] = "nombre";

$tdatausuarios[".tableType"] = "list";

$tdatausuarios[".printerPageOrientation"] = 0;
$tdatausuarios[".nPrinterPageScale"] = 100;

$tdatausuarios[".nPrinterSplitRecords"] = 40;

$tdatausuarios[".nPrinterPDFSplitRecords"] = 40;



$tdatausuarios[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatausuarios[".pageSize"] = 20;

$tdatausuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuarios[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios[".orderindexes"] = array();

$tdatausuarios[".sqlHead"] = "SELECT usuario,  	nick,  	password,  	nombre";
$tdatausuarios[".sqlFrom"] = "FROM usuarios";
$tdatausuarios[".sqlWhereExpr"] = "";
$tdatausuarios[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios[".highlightSearchResults"] = true;

$tableKeysusuarios = array();
$tableKeysusuarios[] = "usuario";
$tdatausuarios[".Keys"] = $tableKeysusuarios;

$tdatausuarios[".listFields"] = array();
$tdatausuarios[".listFields"][] = "nombre";
$tdatausuarios[".listFields"][] = "usuario";
$tdatausuarios[".listFields"][] = "nick";
$tdatausuarios[".listFields"][] = "password";

$tdatausuarios[".hideMobileList"] = array();


$tdatausuarios[".viewFields"] = array();
$tdatausuarios[".viewFields"][] = "usuario";
$tdatausuarios[".viewFields"][] = "nick";
$tdatausuarios[".viewFields"][] = "password";
$tdatausuarios[".viewFields"][] = "nombre";

$tdatausuarios[".addFields"] = array();
$tdatausuarios[".addFields"][] = "nick";
$tdatausuarios[".addFields"][] = "password";
$tdatausuarios[".addFields"][] = "nombre";

$tdatausuarios[".masterListFields"] = array();
$tdatausuarios[".masterListFields"][] = "usuario";
$tdatausuarios[".masterListFields"][] = "nick";
$tdatausuarios[".masterListFields"][] = "password";
$tdatausuarios[".masterListFields"][] = "nombre";

$tdatausuarios[".inlineAddFields"] = array();

$tdatausuarios[".editFields"] = array();
$tdatausuarios[".editFields"][] = "nick";
$tdatausuarios[".editFields"][] = "password";
$tdatausuarios[".editFields"][] = "nombre";

$tdatausuarios[".inlineEditFields"] = array();
$tdatausuarios[".inlineEditFields"][] = "nombre";
$tdatausuarios[".inlineEditFields"][] = "nick";
$tdatausuarios[".inlineEditFields"][] = "password";

$tdatausuarios[".exportFields"] = array();
$tdatausuarios[".exportFields"][] = "usuario";
$tdatausuarios[".exportFields"][] = "nick";
$tdatausuarios[".exportFields"][] = "password";
$tdatausuarios[".exportFields"][] = "nombre";

$tdatausuarios[".importFields"] = array();
$tdatausuarios[".importFields"][] = "usuario";
$tdatausuarios[".importFields"][] = "nick";
$tdatausuarios[".importFields"][] = "password";
$tdatausuarios[".importFields"][] = "nombre";

$tdatausuarios[".printFields"] = array();
$tdatausuarios[".printFields"][] = "usuario";
$tdatausuarios[".printFields"][] = "nick";
$tdatausuarios[".printFields"][] = "password";
$tdatausuarios[".printFields"][] = "nombre";

//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","usuario"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "usuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";
	
		
		
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

	

	
	$tdatausuarios["usuario"] = $fdata;
//	nick
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nick";
	$fdata["GoodName"] = "nick";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","nick"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nick"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nick";
	
		
		
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

	

	
	$tdatausuarios["nick"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","password"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";
	
		
		
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
	
	$edata = array("EditFormat" => "Password");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatausuarios["password"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";
	
		
		
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

	

	
	$tdatausuarios["nombre"] = $fdata;

	
$tables_data["usuarios"]=&$tdatausuarios;
$field_labels["usuarios"] = &$fieldLabelsusuarios;
$fieldToolTips["usuarios"] = &$fieldToolTipsusuarios;
$page_titles["usuarios"] = &$pageTitlesusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuarios"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["usuarios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usuario,  	nick,  	password,  	nombre";
$proto0["m_strFrom"] = "FROM usuarios";
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
	"m_strName" => "usuario",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto5["m_sql"] = "usuario";
$proto5["m_srcTableName"] = "usuarios";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nick",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto7["m_sql"] = "nick";
$proto7["m_srcTableName"] = "usuarios";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto9["m_sql"] = "password";
$proto9["m_srcTableName"] = "usuarios";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto11["m_sql"] = "nombre";
$proto11["m_srcTableName"] = "usuarios";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "usuarios";
$proto14["m_srcTableName"] = "usuarios";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "usuario";
$proto14["m_columns"][] = "nick";
$proto14["m_columns"][] = "password";
$proto14["m_columns"][] = "nombre";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "usuarios";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "usuarios";
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
$proto0["m_srcTableName"]="usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios = createSqlQuery_usuarios();


	
				
	
$tdatausuarios[".sqlquery"] = $queryData_usuarios;

$tableEvents["usuarios"] = new eventsBase;
$tdatausuarios[".hasEvents"] = false;

?>