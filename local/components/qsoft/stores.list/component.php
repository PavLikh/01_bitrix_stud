<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */


/*************************************************************************
	Processing of received parameters
*************************************************************************/
if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 180;

if(!is_array($arParams["IBLOCKS"]))
	$arParams["IBLOCKS"] = array($arParams["IBLOCKS"]);

$arIBlockFilter = array();
foreach($arParams["IBLOCKS"] as $IBLOCK_ID)
{
	$IBLOCK_ID=intval($IBLOCK_ID);
	if($IBLOCK_ID>0)
		$arIBlockFilter[]=$IBLOCK_ID;
}


unset($arParams["IBLOCK_TYPE"]);
$arParams["PARENT_SECTION"] = intval($arParams["PARENT_SECTION"]);
$arParams["IBLOCKS"] = $arIBlockFilter;

if(!empty($arIBlockFilter) && $this->StartResultCache(false, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
		ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
		return;
	}
	//SELECT
	$arSelect = array(
		"ID",
		"IBLOCK_ID",
		"CODE",
		//"IBLOCK_SECTION_ID",
		//"NAME",
		"PREVIEW_PICTURE",
		"PROPERTY_WORK_HOURS",
		"PROPERTY_PHONE",
		"PROPERTY_ADDRESS",
		//"PROPERTY_MAP",
		//"DETAIL_PICTURE",

	);
	//WHERE
	$arFilter = array(
		"IBLOCK_ID" => $arParams["IBLOCKS"],
		"ACTIVE_DATE" => "Y",
		"ACTIVE"=>"Y",
		"CHECK_PERMISSIONS"=>"Y",
	);

	//ORDER BY
	$arSort = array(
		$arParams['SORT_FIELD'] => $arParams['ORDER'],
	);
	//EXECUTE
	$rsIBlockElement = CIBlockElement::GetList($arSort, $arFilter, false, array("nTopCount" => $arParams['ELEMENTS_QUANTITY']), $arSelect);

	?>

	<?
	while ($item = $rsIBlockElement->GetNext(true, false))
	{

		$arResult[$item['ID']] = $item;
		if ($item['PREVIEW_PICTURE']) {
			$imgIDs[] = $arResult[$item['ID']]["PREVIEW_PICTURE"];		

			
			//$arResult[$item['ID']]["PICTURE"] = CFile::GetFileArray($arResult[$item["ID"]]["PREVIEW_PICTURE"]);

			//if(!is_array($arResult[$item['ID']]["PICTURE"]))
				//$arResult[$item['ID']]["PICTURE"] = CFile::GetFileArray($arResult["DETAIL_PICTURE"]);
		}
	}

	if (! empty($imgIDs)) {
		$res = CFile::GetList($arSort, array('@ID' => $imgIDs));
		while($res_arr = $res->GetNext())
		{
    		$imgPath[$res_arr['ID']] = CFile::GetFileSRC($res_arr);
			//var_dump($res_arr);
		}

		foreach ($arResult as $key => $item) {
			$arResult[$key]['PICTURE']['SRC'] = $imgPath[$item['PREVIEW_PICTURE']];
		}
	}


		$this->SetResultCacheKeys(array(
		));
		$this->IncludeComponentTemplate();
	//}
	//else
	//{
	//	$this->AbortResultCache();
	//}


}
?>
