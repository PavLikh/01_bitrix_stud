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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>


<section class="news_block">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

							
		<figure class="news_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

				<a class="news_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<img
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"] ?? NO_IMAGE_PATH ?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					<?//*style="float:left"?>
					/></a>
			
				<figcaption class="news_item_description">
					<div class="news_item_anons">
						<h3 class="dark_grey"><a href="#"><?=$arItem["NAME"]?></a></h3>
						<p><?=$arItem["PREVIEW_TEXT"]?></p>
					</div>
					<p class="news_item_date grey"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
				<figcaption>
		</figure>

	<?endforeach;?>


</section>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
