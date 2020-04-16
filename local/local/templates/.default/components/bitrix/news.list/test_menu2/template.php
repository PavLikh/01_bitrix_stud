<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);
define("NO_IMAGE_PATH", "/local/templates/roga_i_sila_main/images/no-image.jpg");
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
						<h2 class="inline-block"><?=\Bitrix\Main\Localization\Loc::getMessage('NEWS_TITLE')?></h2><span class="all_list">&nbsp;/&nbsp;
							<a href="<?=$arResult['LIST_PAGE_URL']?>" class="text_decor_none">
							<b><?=\Bitrix\Main\Localization\Loc::getMessage('ALL_LINK')?></b>
							</a></span>
						<div>
							<?foreach($arResult["ITEMS"] as $arItem):?>
							<figure class="news_item">
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
									<img
										src="<?=$arItem["PREVIEW_PICTURE"]["SRC"] ?? NO_IMAGE_PATH?>"
										alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
										title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
									/>
								</a>
								<figcaption class="news_item_description">
									<h3><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h3>
									<div class="news_item_anons">
										<a href="#" class="text_decor_none">
											<?echo $arItem["PREVIEW_TEXT"];?>
										</a>
									</div>
									<div class="news_item_date grey"><?= $arItem["DISPLAY_ACTIVE_FROM"]?></div>
								</figcaption>
							</figure>
							<?endforeach;?>
						</div>
					</section>
