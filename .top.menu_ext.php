<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
global $APPLICATION;
$aMenuLinksExt = array();

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "2",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "catalog",
		"ID" => "",
		"IS_SEF" => "N",
		"SECTION_URL" => "/catalog/#SECTION_CODE#/"
	)
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt); // из коммента
?>