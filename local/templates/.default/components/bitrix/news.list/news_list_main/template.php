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
$this->setFrameMode(true);
?>

<section class="news_block inverse">
	<h2 class="inline-block">Новости</h2><span class="all_list">&nbsp;/&nbsp;<a href="<?=SITE_DIR . 'company/news/'?>" class="text_decor_none"><b>Все</b></a></span>
	<div>

	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
			<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<figure class="news_item">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
				</a>
				<figcaption class="news_item_description">
					<h3><a href="#"><?echo $arItem["NAME"]?></a></h3>
					<div class="news_item_anons">
						<a href="#" class="text_decor_none">
							<?=$arItem["PREVIEW_TEXT"]?>
							Парадигма просветляет архетип, таким образом, стратегия поведения, выгодная отдельному человеку
						</a>
					</div>
					<div class="news_item_date grey"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
				</figcaption>
			</figure>
			<?endforeach;?>
		</div>
	</section>
