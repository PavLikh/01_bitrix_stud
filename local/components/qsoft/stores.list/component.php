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


if($this->StartResultCache(false, ($arParams["CACHE_TIME"])))
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
		"PREVIEW_PICTURE",
		"PROPERTY_WORK_HOURS",
		"PROPERTY_PHONE",
		"PROPERTY_ADDRESS",

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

		}
	}

	if (! empty($imgIDs)) {
		$res = CFile::GetList($arSort, array('@ID' => $imgIDs));
		while($res_arr = $res->GetNext())
		{
    		$imgPath[$res_arr['ID']] = CFile::GetFileSRC($res_arr);
		}

		foreach ($arResult as $key => $item) {
			$arResult[$key]['PICTURE']['SRC'] = $imgPath[$item['PREVIEW_PICTURE']];
		}
	}


		$this->SetResultCacheKeys(array(
		));
		$this->IncludeComponentTemplate();

}
?>
