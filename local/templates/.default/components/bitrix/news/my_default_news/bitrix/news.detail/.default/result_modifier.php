<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $ID => $arItems) {
	$arImage = CFile::ResizeImageGet($arItems['DETAIL_PICTURE'], array('width'=>$arParams['LIST_PREV_PICT_W'], 'height'=>$arParams['LIST_PREV_PICT_H']), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	$arResult['ITEMS'][$ID]['DETAIL_PICTURE'] = $arImage;
};

$cp = $this->__component; // возьмем объект компонента

if($arResult["PROPERTIES"]["AUTHOR_TEST"]['VALUE'])
{

	$rsUser = CUser::GetByID($arResult["PROPERTIES"]["AUTHOR_TEST"]['VALUE']);
	$arUser = $rsUser->Fetch();
	$arResult['AUTHOR_TEST'] = array($arUser['NAME'], $arUser['LAST_NAME']);   //тк не нужнгы все перематры ограничим масси только нужными

	$cp->SetResultCacheKeys(array('AUTHOR_TEST'));
}

$arResult['DETAIL_TEXT_50'] = substr($arResult["DETAIL_TEXT"], 0, 50) . '...';
$cp->SetResultCacheKeys(array('DETAIL_TEXT_50'));
?>
<pre>
 <?//var_dump($arResult);?>
</pre>