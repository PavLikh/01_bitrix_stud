<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<!-- <ul id="horizontal-multilevel-menu"> -->
						<nav class="main_menu">
						<ul>

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>


	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="<?= $arItem["SELECTED"] ? 'submenu current' : 'submenu pie' ?>">
				<?if ($arItem["SELECTED"]):?>
					<span><?=$arItem["TEXT"]?></span>
				<?else:?>
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<?endif?>

				<div class="submenu_border"></div>
				<ul>
		<?endif?>

	<?else:?>
		
			<li class="<?= $arItem["SELECTED"] ? 'current' : '' ?>">
				<?if ($arItem["SELECTED"]):?>
					<span><?=$arItem["TEXT"]?></span>
				<?else:?>
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<?endif?>
		

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>


<?endif?>
</ul>
<nav>