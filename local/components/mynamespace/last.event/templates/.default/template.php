<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

?>
<div class="photo-random">
	<?=$arResult["NAME"]?><br>
	<p><a href=""><?=$arResult['ACTIVE_FROM']?>, <?=$arResult['PROPERTY_CITY_VALUE']?></a></p>
	<?=$arResult["PREVIEW_TEXT"]?>
	
</div>
<?

?>