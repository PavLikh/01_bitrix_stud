<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

define("NO_IMAGE_PATH", "/local/templates/.default/images/no-image.jpg");
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
	<h2 class="inline-block"><?=\Bitrix\Main\Localization\Loc::getMessage('NEWS_TITLE')?></h2><span class="all_list">&nbsp;/&nbsp;<a href="<?=$arResult['LIST_PAGE_URL']?>" class="text_decor_none"><b><?=\Bitrix\Main\Localization\Loc::getMessage('ALL_LINK')?></b></a></span>
	<div>
	<?var_dump($arItem["PREVIEW_PICTURE"]); ?>

			<?foreach($arResult["ITEMS"] as $arItem):?>

			<figure class="news_item">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["src"] ?? NO_IMAGE_PATH ?>"
					width="<?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
				</a>

				<figcaption class="news_item_description">
					<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h3>
					<div class="news_item_anons">
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="text_decor_none">
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
