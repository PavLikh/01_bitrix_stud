<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//echo "result ".date("H:i:s")."<br>";

// echo '<pre>';
// var_dump($arParams);
// echo '</pre>';
$APPLICATION->SetTitle("Тестовый заголовок");
foreach ($arResult["ITEMS"] as $ID => $arItems) {
	$arImage = CFile::ResizeImageGet($arItems['DETAIL_PICTURE'], array('width'=>$arParams["LIST_PREV_PICT_W"], 'height'=>$arParams["LIST_PREV_PICT_H"]), BX_RESIZE_IMAGE_PROPORTIONAL, true);




	$arResult["ITEMS"][$ID]['DETAIL_PICTURE'] = $arImage;

}

// echo '<pre>';
// var_dump($arResult);
// echo '</pre>';