<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock=array(
	"-" => GetMessage("IBLOCK_ANY"),
);
$rsIBlock = CIBlock::GetList(Array("sort" => "asc"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch())
{
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}









$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"IBLOCKS" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_IBLOCK"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlock,
			//"MULTIPLE"=>"Y",
			"REFRESH" => "Y",
		),
		"ELEMENTS_QUANTITY" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("ELEMENTS_QUANTITY"),
			"TYPE" => "STRING",
			"DEFAULT" => '2',
		),
		"SECTION_URL" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SECTION_URL"),
			"TYPE" => "STRING",
			"DEFAULT" => '',
		),
		"SORT_FIELD" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SORT_FIELD"),
			"TYPE" => "LIST",
			"VALUES" => array(
				'RAND' => 'Случайный порядок',)
		),
		"ORDER" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("ORDER"),
			"TYPE" => "LIST",
			"VALUES" => array(
				'DESC' => 'По убыванию',)
		),

		// "PARENT_SECTION" => array(
		// 	"PARENT" => "ADDITIONAL_SETTINGS",
		// 	"NAME" => GetMessage("IBLOCK_SECTION_ID"),
		// 	"TYPE" => "STRING",
		// 	"DEFAULT" => '',
		// ),
		// "DETAIL_URL" => CIBlockParameters::GetPathTemplateParam(
		// 	"DETAIL",
		// 	"DETAIL_URL",
		// 	GetMessage("IBLOCK_DETAIL_URL"),
		// 	"",
		// 	"URL_TEMPLATES"
		// ),
		"CACHE_TIME"  =>  Array("DEFAULT"=>180),
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("CP_BPR_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
	),
);
?>
