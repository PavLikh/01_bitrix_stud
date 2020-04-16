<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<?
// $APPLICATION->IncludeComponent(
// 	"bitrix:catalog.store",
// 	".default",
// 	Array(
// 		"CACHE_NOTES" => "",
// 		"CACHE_TIME" => "3600",
// 		"CACHE_TYPE" => "A",
// 		"COMPONENT_TEMPLATE" => ".default",
// 		"MAP_TYPE" => "0",
// 		"PHONE" => "N",
// 		"SCHEDULE" => "N",
// 		"SEF_FOLDER" => "/store/",
// 		"SEF_MODE" => "Y",
// 		"SEF_URL_TEMPLATES" => array("liststores"=>"index.php","element"=>"#store_id#",),
// 		"SET_TITLE" => "Y",
// 		"TITLE" => "Список складов с подробной информацией"
// 	),
// false,
// Array(
// 	'ACTIVE_COMPONENT' => 'N'
// )
//);?> 

<section class="float_inner bottom_block">
<?$APPLICATION->IncludeComponent(
	"qsoft:stores.list", 
	"stores_full", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "stores_full",
		"ELEMENTS_QUANTITY" => "2",
		"IBLOCKS" => "5",
		"IBLOCK_TYPE" => "salons",
		"ORDER" => "DESC",
		"SECTION_URL" => "",
		"SHOW_MAP" => "Y",
		"SORT_FIELD" => "RAND"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?></section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>