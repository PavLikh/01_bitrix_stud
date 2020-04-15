<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//$frame = $this->createFrame()->begin("");
//echo $arResult["BANNER"];
//$frame->end();
?>



<?//var_dump($arResult['BANNERS']);?>

<div class="slider">
	<ul class="bxslider">
		<?foreach($arResult['BANNERS'] as $banner):?>
			<li>
			<div class="banner">
				<?echo  $banner; ?>
			
			</div>
			</li>
		<?endforeach?>
	</ul>
</div>
