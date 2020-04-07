<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


if(is_array($arResult["DETAIL_PICTURE"])):?>
	<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arResult['NAME']?>"/>
<?endif?>

<?echo $arResult["DETAIL_TEXT"]; ?>


<pre>
<?//var_dump($arResult);?>
<?//var_dump($arParams);?>

</pre>



<?if($arResult['AUTHOR_TEST']):?>
	Автор: <?//=$arResult['AUTHOR_TEST']['NAME']?> <!--тк массив автор изменился то не будет выводится-->
	<?=$arResult['AUTHOR_TEST'][0]?>
<?endif?>