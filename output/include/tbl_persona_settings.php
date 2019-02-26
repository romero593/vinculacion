<?php




$tdatatbl_persona = array();
$tdatatbl_persona[".searchableFields"] = array();
	$tdatatbl_persona[".truncateText"] = true;
	$tdatatbl_persona[".NumberOfChars"] = 80;
	$tdatatbl_persona[".ShortName"] = "tbl_persona";
	$tdatatbl_persona[".OwnerID"] = "";
	$tdatatbl_persona[".OriginalTable"] = "tbl_persona";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_persona[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_persona[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_persona = array();
$fieldToolTipstbl_persona = array();
$pageTitlestbl_persona = array();
$placeHolderstbl_persona = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_persona["Spanish"] = array();
	$fieldToolTipstbl_persona["Spanish"] = array();
	$placeHolderstbl_persona["Spanish"] = array();
	$pageTitlestbl_persona["Spanish"] = array();
	$fieldLabelstbl_persona["Spanish"]["id_persona"] = "Id Persona";
	$fieldToolTipstbl_persona["Spanish"]["id_persona"] = "";
	$placeHolderstbl_persona["Spanish"]["id_persona"] = "";
	$fieldLabelstbl_persona["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipstbl_persona["Spanish"]["cedula"] = "";
	$placeHolderstbl_persona["Spanish"]["cedula"] = "";
	$fieldLabelstbl_persona["Spanish"]["nro_matricula"] = "Nro Matricula";
	$fieldToolTipstbl_persona["Spanish"]["nro_matricula"] = "";
	$placeHolderstbl_persona["Spanish"]["nro_matricula"] = "";
	$fieldLabelstbl_persona["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipstbl_persona["Spanish"]["nombres"] = "";
	$placeHolderstbl_persona["Spanish"]["nombres"] = "";
	$fieldLabelstbl_persona["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipstbl_persona["Spanish"]["apellidos"] = "";
	$placeHolderstbl_persona["Spanish"]["apellidos"] = "";
	$fieldLabelstbl_persona["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipstbl_persona["Spanish"]["telefono"] = "";
	$placeHolderstbl_persona["Spanish"]["telefono"] = "";
	$fieldLabelstbl_persona["Spanish"]["email_institucional"] = "Email Institucional";
	$fieldToolTipstbl_persona["Spanish"]["email_institucional"] = "";
	$placeHolderstbl_persona["Spanish"]["email_institucional"] = "";
	$fieldLabelstbl_persona["Spanish"]["email"] = "Email";
	$fieldToolTipstbl_persona["Spanish"]["email"] = "";
	$placeHolderstbl_persona["Spanish"]["email"] = "";
	$fieldLabelstbl_persona["Spanish"]["id_ciudad"] = "Id Ciudad";
	$fieldToolTipstbl_persona["Spanish"]["id_ciudad"] = "";
	$placeHolderstbl_persona["Spanish"]["id_ciudad"] = "";
	$fieldLabelstbl_persona["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipstbl_persona["Spanish"]["direccion"] = "";
	$placeHolderstbl_persona["Spanish"]["direccion"] = "";
	$fieldLabelstbl_persona["Spanish"]["pass"] = "Pass";
	$fieldToolTipstbl_persona["Spanish"]["pass"] = "";
	$placeHolderstbl_persona["Spanish"]["pass"] = "";
	$fieldLabelstbl_persona["Spanish"]["foto"] = "Foto";
	$fieldToolTipstbl_persona["Spanish"]["foto"] = "";
	$placeHolderstbl_persona["Spanish"]["foto"] = "";
	$fieldLabelstbl_persona["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_persona["Spanish"]["estado"] = "";
	$placeHolderstbl_persona["Spanish"]["estado"] = "";
	$fieldLabelstbl_persona["Spanish"]["id_extension"] = "Id Extension";
	$fieldToolTipstbl_persona["Spanish"]["id_extension"] = "";
	$placeHolderstbl_persona["Spanish"]["id_extension"] = "";
	$fieldLabelstbl_persona["Spanish"]["id_carrera"] = "Id Carrera";
	$fieldToolTipstbl_persona["Spanish"]["id_carrera"] = "";
	$placeHolderstbl_persona["Spanish"]["id_carrera"] = "";
	$fieldLabelstbl_persona["Spanish"]["nivel"] = "Nivel";
	$fieldToolTipstbl_persona["Spanish"]["nivel"] = "";
	$placeHolderstbl_persona["Spanish"]["nivel"] = "";
	$fieldLabelstbl_persona["Spanish"]["id_periodo"] = "Id Periodo";
	$fieldToolTipstbl_persona["Spanish"]["id_periodo"] = "";
	$placeHolderstbl_persona["Spanish"]["id_periodo"] = "";
	$fieldLabelstbl_persona["Spanish"]["id_rol"] = "Id Rol";
	$fieldToolTipstbl_persona["Spanish"]["id_rol"] = "";
	$placeHolderstbl_persona["Spanish"]["id_rol"] = "";
	$fieldLabelstbl_persona["Spanish"]["id_modalidad"] = "Id Modalidad";
	$fieldToolTipstbl_persona["Spanish"]["id_modalidad"] = "";
	$placeHolderstbl_persona["Spanish"]["id_modalidad"] = "";
	$fieldLabelstbl_persona["Spanish"]["ciudad"] = "Ciudad";
	$fieldToolTipstbl_persona["Spanish"]["ciudad"] = "";
	$placeHolderstbl_persona["Spanish"]["ciudad"] = "";
	$fieldLabelstbl_persona["Spanish"]["id_provincia"] = "Id Provincia";
	$fieldToolTipstbl_persona["Spanish"]["id_provincia"] = "";
	$placeHolderstbl_persona["Spanish"]["id_provincia"] = "";
	$fieldLabelstbl_persona["Spanish"]["provincia"] = "Provincia";
	$fieldToolTipstbl_persona["Spanish"]["provincia"] = "";
	$placeHolderstbl_persona["Spanish"]["provincia"] = "";
	$fieldLabelstbl_persona["Spanish"]["extension"] = "Extension";
	$fieldToolTipstbl_persona["Spanish"]["extension"] = "";
	$placeHolderstbl_persona["Spanish"]["extension"] = "";
	$fieldLabelstbl_persona["Spanish"]["id_facultad"] = "Id Facultad";
	$fieldToolTipstbl_persona["Spanish"]["id_facultad"] = "";
	$placeHolderstbl_persona["Spanish"]["id_facultad"] = "";
	$fieldLabelstbl_persona["Spanish"]["facultad"] = "Facultad";
	$fieldToolTipstbl_persona["Spanish"]["facultad"] = "";
	$placeHolderstbl_persona["Spanish"]["facultad"] = "";
	if (count($fieldToolTipstbl_persona["Spanish"]))
		$tdatatbl_persona[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_persona["English"] = array();
	$fieldToolTipstbl_persona["English"] = array();
	$placeHolderstbl_persona["English"] = array();
	$pageTitlestbl_persona["English"] = array();
	if (count($fieldToolTipstbl_persona["English"]))
		$tdatatbl_persona[".isUseToolTips"] = true;
}


	$tdatatbl_persona[".NCSearch"] = true;



$tdatatbl_persona[".shortTableName"] = "tbl_persona";
$tdatatbl_persona[".nSecOptions"] = 0;

$tdatatbl_persona[".mainTableOwnerID"] = "";
$tdatatbl_persona[".entityType"] = 0;

$tdatatbl_persona[".strOriginalTableName"] = "tbl_persona";

	



$tdatatbl_persona[".showAddInPopup"] = false;

$tdatatbl_persona[".showEditInPopup"] = false;

$tdatatbl_persona[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_persona[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_persona[".listAjax"] = false;
//	temporary
$tdatatbl_persona[".listAjax"] = false;

	$tdatatbl_persona[".audit"] = false;

	$tdatatbl_persona[".locking"] = false;


$pages = $tdatatbl_persona[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_persona[".edit"] = true;
	$tdatatbl_persona[".afterEditAction"] = 1;
	$tdatatbl_persona[".closePopupAfterEdit"] = 1;
	$tdatatbl_persona[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_persona[".add"] = true;
$tdatatbl_persona[".afterAddAction"] = 1;
$tdatatbl_persona[".closePopupAfterAdd"] = 1;
$tdatatbl_persona[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_persona[".list"] = true;
}



$tdatatbl_persona[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_persona[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_persona[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_persona[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_persona[".printFriendly"] = true;
}



$tdatatbl_persona[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_persona[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_persona[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_persona[".isUseAjaxSuggest"] = true;

$tdatatbl_persona[".rowHighlite"] = true;




$tdatatbl_persona[".flexibleSearch"] = true;


$tdatatbl_persona[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_persona[".buttonsAdded"] = false;

$tdatatbl_persona[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_persona[".isUseTimeForSearch"] = false;


$tdatatbl_persona[".badgeColor"] = "778899";


$tdatatbl_persona[".allSearchFields"] = array();
$tdatatbl_persona[".filterFields"] = array();
$tdatatbl_persona[".requiredSearchFields"] = array();

$tdatatbl_persona[".googleLikeFields"] = array();
$tdatatbl_persona[".googleLikeFields"][] = "id_persona";
$tdatatbl_persona[".googleLikeFields"][] = "cedula";
$tdatatbl_persona[".googleLikeFields"][] = "nro_matricula";
$tdatatbl_persona[".googleLikeFields"][] = "nombres";
$tdatatbl_persona[".googleLikeFields"][] = "apellidos";
$tdatatbl_persona[".googleLikeFields"][] = "telefono";
$tdatatbl_persona[".googleLikeFields"][] = "email_institucional";
$tdatatbl_persona[".googleLikeFields"][] = "email";
$tdatatbl_persona[".googleLikeFields"][] = "id_ciudad";
$tdatatbl_persona[".googleLikeFields"][] = "direccion";
$tdatatbl_persona[".googleLikeFields"][] = "pass";
$tdatatbl_persona[".googleLikeFields"][] = "foto";
$tdatatbl_persona[".googleLikeFields"][] = "estado";
$tdatatbl_persona[".googleLikeFields"][] = "id_extension";
$tdatatbl_persona[".googleLikeFields"][] = "id_carrera";
$tdatatbl_persona[".googleLikeFields"][] = "nivel";
$tdatatbl_persona[".googleLikeFields"][] = "id_periodo";
$tdatatbl_persona[".googleLikeFields"][] = "id_rol";
$tdatatbl_persona[".googleLikeFields"][] = "id_modalidad";
$tdatatbl_persona[".googleLikeFields"][] = "ciudad";
$tdatatbl_persona[".googleLikeFields"][] = "id_provincia";
$tdatatbl_persona[".googleLikeFields"][] = "provincia";
$tdatatbl_persona[".googleLikeFields"][] = "extension";
$tdatatbl_persona[".googleLikeFields"][] = "id_facultad";
$tdatatbl_persona[".googleLikeFields"][] = "facultad";



$tdatatbl_persona[".tableType"] = "list";

$tdatatbl_persona[".printerPageOrientation"] = 0;
$tdatatbl_persona[".nPrinterPageScale"] = 100;

$tdatatbl_persona[".nPrinterSplitRecords"] = 40;

$tdatatbl_persona[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_persona[".geocodingEnabled"] = false;










$tdatatbl_persona[".pageSize"] = 20;

$tdatatbl_persona[".warnLeavingPages"] = true;



$tstrOrderBy = "order by tbl_persona.nombres";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_persona[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_persona[".orderindexes"] = array();
	$tdatatbl_persona[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "tbl_persona.nombres");


$tdatatbl_persona[".sqlHead"] = "SELECT tbl_persona.id_persona,  tbl_persona.cedula,  tbl_persona.nro_matricula,  tbl_persona.nombres,  tbl_persona.apellidos,  tbl_persona.telefono,  tbl_persona.email_institucional,  tbl_persona.email,  tbl_persona.id_ciudad,  tbl_persona.direccion,  tbl_persona.pass,  tbl_persona.foto,  tbl_persona.estado,  tbl_persona.id_extension,  tbl_persona.id_carrera,  tbl_persona.nivel,  tbl_persona.id_periodo,  tbl_persona.id_rol,  tbl_persona.id_modalidad,  tbl_ciudad.ciudad,  tbl_ciudad.id_provincia,  tbl_provincia.provincia,  tbl_extension.extension,  tbl_facultad.id_facultad,  tbl_facultad.facultad";
$tdatatbl_persona[".sqlFrom"] = "FROM tbl_persona  INNER JOIN tbl_ciudad ON tbl_persona.id_ciudad = tbl_ciudad.id_ciudad  LEFT OUTER JOIN tbl_extension ON tbl_ciudad.id_ciudad = tbl_extension.id_ciudad AND tbl_persona.id_extension = tbl_extension.id_extension  LEFT OUTER JOIN tbl_facultad ON tbl_extension.id_extension = tbl_facultad.id_extension  INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$tdatatbl_persona[".sqlWhereExpr"] = "";
$tdatatbl_persona[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_persona[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_persona[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_persona[".highlightSearchResults"] = true;

$tableKeystbl_persona = array();
$tableKeystbl_persona[] = "id_persona";
$tdatatbl_persona[".Keys"] = $tableKeystbl_persona;


$tdatatbl_persona[".hideMobileList"] = array();




//	id_persona
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_persona";
	$fdata["GoodName"] = "id_persona";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_persona");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_persona";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.id_persona";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_persona"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_persona";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","cedula");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.cedula";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["cedula"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "cedula";
//	nro_matricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nro_matricula";
	$fdata["GoodName"] = "nro_matricula";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","nro_matricula");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nro_matricula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.nro_matricula";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["nro_matricula"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "nro_matricula";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","nombres");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.nombres";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["nombres"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "nombres";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","apellidos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "apellidos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.apellidos";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["apellidos"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "apellidos";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","telefono");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.telefono";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
		
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["telefono"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "telefono";
//	email_institucional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email_institucional";
	$fdata["GoodName"] = "email_institucional";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","email_institucional");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email_institucional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.email_institucional";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["email_institucional"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "email_institucional";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["email"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "email";
//	id_ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_ciudad";
	$fdata["GoodName"] = "id_ciudad";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_ciudad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.id_ciudad";

	
	
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
	$edata["LookupTable"] = "tbl_ciudad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_ciudad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ciudad";

				$edata["LookupWhere"] = "tbl_ciudad.estado='Activo'";


	
	$edata["LookupOrderBy"] = "ciudad";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_provincia", "lookup" => "id_provincia" );

	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_ciudad"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_ciudad";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","direccion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.direccion";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["direccion"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "direccion";
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","pass");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.pass";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["pass"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "pass";
//	foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "foto";
	$fdata["GoodName"] = "foto";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","foto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "foto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.foto";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "perfil";

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
			$edata["ThumbnailSize"] = 150;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["foto"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "foto";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.estado";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Inactivo";

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["estado"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "estado";
//	id_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "id_extension";
	$fdata["GoodName"] = "id_extension";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_extension");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.id_extension";

	
	
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
	$edata["LookupTable"] = "tbl_extension";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_extension";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "extension";

				$edata["LookupWhere"] = "tbl_extension.estado='Activo'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_facultad";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_extension"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_extension";
//	id_carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_carrera";
	$fdata["GoodName"] = "id_carrera";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_carrera");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_carrera";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.id_carrera";

	
	
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
	$edata["LookupTable"] = "tbl_carrera";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_carrera";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "carrera";

				$edata["LookupWhere"] = "tbl_carrera.estado='Activo'";


	
	$edata["LookupOrderBy"] = "carrera";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_facultad", "lookup" => "id_facultad" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_carrera"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_carrera";
//	nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nivel";
	$fdata["GoodName"] = "nivel";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","nivel");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.nivel";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "PRIMERO";
	$edata["LookupValues"][] = "SEGUNDO";
	$edata["LookupValues"][] = "TERCERO";
	$edata["LookupValues"][] = "CUARTO";
	$edata["LookupValues"][] = "QUINTO";
	$edata["LookupValues"][] = "SEXTO";
	$edata["LookupValues"][] = "SEPTIMO";
	$edata["LookupValues"][] = "OCTAVO";
	$edata["LookupValues"][] = "NOVENO";
	$edata["LookupValues"][] = "DECIMO";

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["nivel"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "nivel";
//	id_periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "id_periodo";
	$fdata["GoodName"] = "id_periodo";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_periodo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_periodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.id_periodo";

	
	
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
	$edata["LookupTable"] = "tbl_periodo";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_periodo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "periodo";

				$edata["LookupWhere"] = "tbl_periodo.estado='Activo'";


	
	$edata["LookupOrderBy"] = "periodo";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_periodo"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_periodo";
//	id_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "id_rol";
	$fdata["GoodName"] = "id_rol";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_rol");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_rol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.id_rol";

	
	
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
	$edata["LookupTable"] = "tbl_rol";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_rol";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "rol";

				$edata["LookupWhere"] = "tbl_rol.estado='Activo'";


	
	$edata["LookupOrderBy"] = "rol";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_rol"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_rol";
//	id_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "id_modalidad";
	$fdata["GoodName"] = "id_modalidad";
	$fdata["ownerTable"] = "tbl_persona";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_modalidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_modalidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_persona.id_modalidad";

	
	
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
	$edata["LookupTable"] = "tbl_modalidad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_modalidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "modalidad";

				$edata["LookupWhere"] = "tbl_modalidad.estado='Activo'";


	
	$edata["LookupOrderBy"] = "modalidad";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_modalidad"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_modalidad";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "tbl_ciudad";
	$fdata["Label"] = GetFieldLabel("tbl_persona","ciudad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_ciudad.ciudad";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["ciudad"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "ciudad";
//	id_provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "id_provincia";
	$fdata["GoodName"] = "id_provincia";
	$fdata["ownerTable"] = "tbl_ciudad";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_provincia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_provincia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_ciudad.id_provincia";

	
	
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
	$edata["LookupTable"] = "tbl_provincia";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_provincia";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "provincia";

				$edata["LookupWhere"] = "tbl_provincia.estado='Activo'";


	
	$edata["LookupOrderBy"] = "provincia";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_ciudad";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_provincia"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_provincia";
//	provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "provincia";
	$fdata["GoodName"] = "provincia";
	$fdata["ownerTable"] = "tbl_provincia";
	$fdata["Label"] = GetFieldLabel("tbl_persona","provincia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "provincia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_provincia.provincia";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["provincia"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "provincia";
//	extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "extension";
	$fdata["GoodName"] = "extension";
	$fdata["ownerTable"] = "tbl_extension";
	$fdata["Label"] = GetFieldLabel("tbl_persona","extension");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_extension.extension";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["extension"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "extension";
//	id_facultad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "id_facultad";
	$fdata["GoodName"] = "id_facultad";
	$fdata["ownerTable"] = "tbl_facultad";
	$fdata["Label"] = GetFieldLabel("tbl_persona","id_facultad");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_facultad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_facultad.id_facultad";

	
	
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
	$edata["LookupTable"] = "tbl_facultad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_facultad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "facultad";

				$edata["LookupWhere"] = "tbl_facultad.estado='Activo'";


	
	$edata["LookupOrderBy"] = "facultad";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_extension", "lookup" => "id_extension" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_carrera";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["id_facultad"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "id_facultad";
//	facultad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "facultad";
	$fdata["GoodName"] = "facultad";
	$fdata["ownerTable"] = "tbl_facultad";
	$fdata["Label"] = GetFieldLabel("tbl_persona","facultad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "facultad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_facultad.facultad";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_persona["facultad"] = $fdata;
		$tdatatbl_persona[".searchableFields"][] = "facultad";


$tables_data["tbl_persona"]=&$tdatatbl_persona;
$field_labels["tbl_persona"] = &$fieldLabelstbl_persona;
$fieldToolTips["tbl_persona"] = &$fieldToolTipstbl_persona;
$placeHolders["tbl_persona"] = &$placeHolderstbl_persona;
$page_titles["tbl_persona"] = &$pageTitlestbl_persona;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_persona"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_persona"] = array();



	
				$strOriginalDetailsTable="tbl_carrera";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_carrera";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_carrera";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_persona"][0] = $masterParams;
				$masterTablesData["tbl_persona"][0]["masterKeys"] = array();
	$masterTablesData["tbl_persona"][0]["masterKeys"][]="id_carrera";
				$masterTablesData["tbl_persona"][0]["detailKeys"] = array();
	$masterTablesData["tbl_persona"][0]["detailKeys"][]="id_carrera";
		
	
				$strOriginalDetailsTable="tbl_extension";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_extension";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_extension";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_persona"][1] = $masterParams;
				$masterTablesData["tbl_persona"][1]["masterKeys"] = array();
	$masterTablesData["tbl_persona"][1]["masterKeys"][]="id_extension";
				$masterTablesData["tbl_persona"][1]["detailKeys"] = array();
	$masterTablesData["tbl_persona"][1]["detailKeys"][]="id_extension";
		
	
				$strOriginalDetailsTable="tbl_modalidad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_modalidad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_modalidad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_persona"][2] = $masterParams;
				$masterTablesData["tbl_persona"][2]["masterKeys"] = array();
	$masterTablesData["tbl_persona"][2]["masterKeys"][]="id_modalidad";
				$masterTablesData["tbl_persona"][2]["detailKeys"] = array();
	$masterTablesData["tbl_persona"][2]["detailKeys"][]="id_modalidad";
		
	
				$strOriginalDetailsTable="tbl_periodo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_periodo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_periodo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_persona"][3] = $masterParams;
				$masterTablesData["tbl_persona"][3]["masterKeys"] = array();
	$masterTablesData["tbl_persona"][3]["masterKeys"][]="id_periodo";
				$masterTablesData["tbl_persona"][3]["detailKeys"] = array();
	$masterTablesData["tbl_persona"][3]["detailKeys"][]="id_periodo";
		
	
				$strOriginalDetailsTable="tbl_rol";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_rol";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_rol";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_persona"][4] = $masterParams;
				$masterTablesData["tbl_persona"][4]["masterKeys"] = array();
	$masterTablesData["tbl_persona"][4]["masterKeys"][]="id_rol";
				$masterTablesData["tbl_persona"][4]["detailKeys"] = array();
	$masterTablesData["tbl_persona"][4]["detailKeys"][]="id_rol";
		
	
				$strOriginalDetailsTable="tbl_ciudad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_ciudad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_ciudad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_persona"][5] = $masterParams;
				$masterTablesData["tbl_persona"][5]["masterKeys"] = array();
	$masterTablesData["tbl_persona"][5]["masterKeys"][]="id_ciudad";
				$masterTablesData["tbl_persona"][5]["detailKeys"] = array();
	$masterTablesData["tbl_persona"][5]["detailKeys"][]="id_ciudad";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_persona()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_persona.id_persona,  tbl_persona.cedula,  tbl_persona.nro_matricula,  tbl_persona.nombres,  tbl_persona.apellidos,  tbl_persona.telefono,  tbl_persona.email_institucional,  tbl_persona.email,  tbl_persona.id_ciudad,  tbl_persona.direccion,  tbl_persona.pass,  tbl_persona.foto,  tbl_persona.estado,  tbl_persona.id_extension,  tbl_persona.id_carrera,  tbl_persona.nivel,  tbl_persona.id_periodo,  tbl_persona.id_rol,  tbl_persona.id_modalidad,  tbl_ciudad.ciudad,  tbl_ciudad.id_provincia,  tbl_provincia.provincia,  tbl_extension.extension,  tbl_facultad.id_facultad,  tbl_facultad.facultad";
$proto0["m_strFrom"] = "FROM tbl_persona  INNER JOIN tbl_ciudad ON tbl_persona.id_ciudad = tbl_ciudad.id_ciudad  LEFT OUTER JOIN tbl_extension ON tbl_ciudad.id_ciudad = tbl_extension.id_ciudad AND tbl_persona.id_extension = tbl_extension.id_extension  LEFT OUTER JOIN tbl_facultad ON tbl_extension.id_extension = tbl_facultad.id_extension  INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by tbl_persona.nombres";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_persona",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto6["m_sql"] = "tbl_persona.id_persona";
$proto6["m_srcTableName"] = "tbl_persona";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto8["m_sql"] = "tbl_persona.cedula";
$proto8["m_srcTableName"] = "tbl_persona";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_matricula",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto10["m_sql"] = "tbl_persona.nro_matricula";
$proto10["m_srcTableName"] = "tbl_persona";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto12["m_sql"] = "tbl_persona.nombres";
$proto12["m_srcTableName"] = "tbl_persona";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto14["m_sql"] = "tbl_persona.apellidos";
$proto14["m_srcTableName"] = "tbl_persona";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto16["m_sql"] = "tbl_persona.telefono";
$proto16["m_srcTableName"] = "tbl_persona";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email_institucional",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto18["m_sql"] = "tbl_persona.email_institucional";
$proto18["m_srcTableName"] = "tbl_persona";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto20["m_sql"] = "tbl_persona.email";
$proto20["m_srcTableName"] = "tbl_persona";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_ciudad",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto22["m_sql"] = "tbl_persona.id_ciudad";
$proto22["m_srcTableName"] = "tbl_persona";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto24["m_sql"] = "tbl_persona.direccion";
$proto24["m_srcTableName"] = "tbl_persona";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "pass",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto26["m_sql"] = "tbl_persona.pass";
$proto26["m_srcTableName"] = "tbl_persona";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "foto",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto28["m_sql"] = "tbl_persona.foto";
$proto28["m_srcTableName"] = "tbl_persona";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto30["m_sql"] = "tbl_persona.estado";
$proto30["m_srcTableName"] = "tbl_persona";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto32["m_sql"] = "tbl_persona.id_extension";
$proto32["m_srcTableName"] = "tbl_persona";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "id_carrera",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto34["m_sql"] = "tbl_persona.id_carrera";
$proto34["m_srcTableName"] = "tbl_persona";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto36["m_sql"] = "tbl_persona.nivel";
$proto36["m_srcTableName"] = "tbl_persona";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_periodo",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto38["m_sql"] = "tbl_persona.id_periodo";
$proto38["m_srcTableName"] = "tbl_persona";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rol",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto40["m_sql"] = "tbl_persona.id_rol";
$proto40["m_srcTableName"] = "tbl_persona";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "id_modalidad",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto42["m_sql"] = "tbl_persona.id_modalidad";
$proto42["m_srcTableName"] = "tbl_persona";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudad",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_persona"
));

$proto44["m_sql"] = "tbl_ciudad.ciudad";
$proto44["m_srcTableName"] = "tbl_persona";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "id_provincia",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_persona"
));

$proto46["m_sql"] = "tbl_ciudad.id_provincia";
$proto46["m_srcTableName"] = "tbl_persona";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "provincia",
	"m_strTable" => "tbl_provincia",
	"m_srcTableName" => "tbl_persona"
));

$proto48["m_sql"] = "tbl_provincia.provincia";
$proto48["m_srcTableName"] = "tbl_persona";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "extension",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_persona"
));

$proto50["m_sql"] = "tbl_extension.extension";
$proto50["m_srcTableName"] = "tbl_persona";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "id_facultad",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_persona"
));

$proto52["m_sql"] = "tbl_facultad.id_facultad";
$proto52["m_srcTableName"] = "tbl_persona";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "facultad",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_persona"
));

$proto54["m_sql"] = "tbl_facultad.facultad";
$proto54["m_srcTableName"] = "tbl_persona";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "tbl_persona";
$proto57["m_srcTableName"] = "tbl_persona";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id_persona";
$proto57["m_columns"][] = "cedula";
$proto57["m_columns"][] = "nro_matricula";
$proto57["m_columns"][] = "nombres";
$proto57["m_columns"][] = "apellidos";
$proto57["m_columns"][] = "telefono";
$proto57["m_columns"][] = "email_institucional";
$proto57["m_columns"][] = "email";
$proto57["m_columns"][] = "id_ciudad";
$proto57["m_columns"][] = "direccion";
$proto57["m_columns"][] = "pass";
$proto57["m_columns"][] = "foto";
$proto57["m_columns"][] = "estado";
$proto57["m_columns"][] = "id_extension";
$proto57["m_columns"][] = "id_carrera";
$proto57["m_columns"][] = "nivel";
$proto57["m_columns"][] = "id_periodo";
$proto57["m_columns"][] = "id_rol";
$proto57["m_columns"][] = "id_modalidad";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "tbl_persona";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "tbl_persona";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_INNERJOIN";
			$proto61=array();
$proto61["m_strName"] = "tbl_ciudad";
$proto61["m_srcTableName"] = "tbl_persona";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id_ciudad";
$proto61["m_columns"][] = "ciudad";
$proto61["m_columns"][] = "estado";
$proto61["m_columns"][] = "id_provincia";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "INNER JOIN tbl_ciudad ON tbl_persona.id_ciudad = tbl_ciudad.id_ciudad";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "tbl_persona";
$proto62=array();
$proto62["m_sql"] = "tbl_persona.id_ciudad = tbl_ciudad.id_ciudad";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ciudad",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= tbl_ciudad.id_ciudad";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
												$proto64=array();
$proto64["m_link"] = "SQLL_LEFTJOIN";
			$proto65=array();
$proto65["m_strName"] = "tbl_extension";
$proto65["m_srcTableName"] = "tbl_persona";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "id_extension";
$proto65["m_columns"][] = "extension";
$proto65["m_columns"][] = "estado";
$proto65["m_columns"][] = "codigo_u";
$proto65["m_columns"][] = "id_ciudad";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "LEFT OUTER JOIN tbl_extension ON tbl_ciudad.id_ciudad = tbl_extension.id_ciudad AND tbl_persona.id_extension = tbl_extension.id_extension";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "tbl_persona";
$proto66=array();
$proto66["m_sql"] = "tbl_ciudad.id_ciudad = tbl_extension.id_ciudad AND tbl_persona.id_extension = tbl_extension.id_extension";
$proto66["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "tbl_ciudad.id_ciudad = tbl_extension.id_ciudad AND tbl_persona.id_extension = tbl_extension.id_extension"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
						$proto68=array();
$proto68["m_sql"] = "tbl_ciudad.id_ciudad = tbl_extension.id_ciudad";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ciudad",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_persona"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= tbl_extension.id_ciudad";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

			$proto66["m_contained"][]=$obj;
						$proto70=array();
$proto70["m_sql"] = "tbl_persona.id_extension = tbl_extension.id_extension";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= tbl_extension.id_extension";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

			$proto66["m_contained"][]=$obj;
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_LEFTJOIN";
			$proto73=array();
$proto73["m_strName"] = "tbl_facultad";
$proto73["m_srcTableName"] = "tbl_persona";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "id_facultad";
$proto73["m_columns"][] = "facultad";
$proto73["m_columns"][] = "estado";
$proto73["m_columns"][] = "id_extension";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN tbl_facultad ON tbl_extension.id_extension = tbl_facultad.id_extension";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "tbl_persona";
$proto74=array();
$proto74["m_sql"] = "tbl_extension.id_extension = tbl_facultad.id_extension";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_persona"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= tbl_facultad.id_extension";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_INNERJOIN";
			$proto77=array();
$proto77["m_strName"] = "tbl_provincia";
$proto77["m_srcTableName"] = "tbl_persona";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id_provincia";
$proto77["m_columns"][] = "provincia";
$proto77["m_columns"][] = "estado";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "tbl_persona";
$proto78=array();
$proto78["m_sql"] = "tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_provincia",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_persona"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= tbl_provincia.id_provincia";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "tbl_persona",
	"m_srcTableName" => "tbl_persona"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 1;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_persona";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_persona = createSqlQuery_tbl_persona();


	
		;

																									

$tdatatbl_persona[".sqlquery"] = $queryData_tbl_persona;

include_once(getabspath("include/tbl_persona_events.php"));
$tableEvents["tbl_persona"] = new eventclass_tbl_persona;
$tdatatbl_persona[".hasEvents"] = true;

?>