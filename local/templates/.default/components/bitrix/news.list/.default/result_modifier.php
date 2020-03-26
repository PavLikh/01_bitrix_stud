<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

echo "result ".date("H:i:s")."<br>";

$APPLICATION->SetTitle("Тестовый заголовок");

foreach ($arResult['ITEMS'] as $ID => $arItems) {
	$arImage = CFile::ResizeImageGet($arItems['PREVIEW_PICTURE'], array('width'=>$arParams['LIST_PREV_PICT_W'], 'height'=>$arParams['LIST_PREV_PICT_H']), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	$arResult['ITEMS'][$ID]['PREVIEW_PICTURE'] = $arImage;
};

//var_dump($arResult['ITEMS']);