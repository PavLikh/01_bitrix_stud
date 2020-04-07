<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.store",
	"",
	Array(
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"MAP_TYPE" => "0",
		"PHONE" => "N",
		"SCHEDULE" => "N",
		"SEF_FOLDER" => "/store/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("liststores"=>"index.php","element"=>"#store_id#",),
		"SET_TITLE" => "Y",
		"TITLE" => "Список складов с подробной информацией",
		"VARIABLE_ALIASES" => array("liststores"=>"","element"=>"",)
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'N'
)
);?><?$APPLICATION->IncludeComponent(
	"qsoft:stores.list", 
	"stores_short", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"ELEMENTS_QUANTITY" => "2",
		"IBLOCKS" => "5",
		"IBLOCK_TYPE" => "salons",
		"ORDER" => "DESC",
		"SECTION_URL" => "",
		"SORT_FIELD" => "RAND",
		"COMPONENT_TEMPLATE" => "stores_short"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>