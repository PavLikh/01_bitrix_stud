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

	<section class="shops_block">
		<h2 class="inline-block"><?=\Bitrix\Main\Localization\Loc::getMessage('TITLE_STORES_BLOCK')?></h2>
		<span class="dark_grey all_list">&nbsp;/&nbsp;<a href="<?=$arParams["SECTION_URL"]?>" class="text_decor_none"><b><?=\Bitrix\Main\Localization\Loc::getMessage('STORES_PAGE_LINK')?></b></a></span>
		<div>

		<?foreach ($arResult['ITEMS'] as $key => $item):?>
				<figure class="shops_block_item">
					<a href=""><img src="<?=$item["PICTURE"]["SRC"] ?? NO_IMAGE_PATH ?>" alt="" title="" /></a>
					<figcaption class="shops_block_item_description">
						<h3 class="shops_block_item_name"><?=$item["NAME"]?></h3>
						<p class="dark_grey"><?=$item["PROPERTY_ADDRESS_VALUE"]?></p>
						<p class="black"><?=$item["PROPERTY_PHONE_VALUE"]?></p>
						<p><?=\Bitrix\Main\Localization\Loc::getMessage('OPENING_HOURSE')?><br/><?=$item["PROPERTY_WORK_HOURS_VALUE"]?></p>

					</figcaption>
				</figure>

		<?endforeach?>
		</div>
	</section>

