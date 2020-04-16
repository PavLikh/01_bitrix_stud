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
$frame = $this->createFrame()->begin('');
?>



<!-- <footer class="footer width_960"> -->
			<section class="float_inner bottom_block">
				<section class="shops_block">
					<h2 class="inline-block">My template1</h2>
					<span class="dark_grey all_list">&nbsp;/&nbsp;<a href="#" class="text_decor_none"><b>Все</b></a></span>
					<div>
						<?if(is_array($arResult["PICTURE"])):?>

						<figure class="shops_block_item">
							<a href=""><img src="<?=$arResult["PICTURE"]["src"]?>" alt="<?=$arResult["NAME"]?>" title="" /></a>
							<figcaption class="shops_block_item_description">
								<h3 class="shops_block_item_name"><?=$arResult["NAME"]?><?=$arResult['IBLOCK_PROP']['NAME'];?></h3>
								<p class="dark_grey"><?=substr($arResult['PREVIEW_TEXT'], 0, 70)?></p>
								<p class="black">+7 495 987 65 43</p>
								<p>Часы работы:<br/> c 9.00 до 21.00</p>
							</figcaption>
						</figure>

					</div>

				</section>
				<a href="<?=$arResult["DETAIL_PAGE_URL"]?>"><?=$arResult["NAME"]?></a>
	<!-- 		</footer> -->

	<?endif?>
	
<!-- </div> -->
<?
$frame->end();
?>
<pre>
	<?//var_dump($arUser);?>
	<?//='<br>$arParams[IBLOCK_PROP]:  ';?>
	<?//var_dump($arParams['IBLOCK_PROP']);?>
	<?//var_dump($arParams);?>
	<?//='<br>$arResult:  ';?>
	<?//var_dump($arResult);?>

</pre>