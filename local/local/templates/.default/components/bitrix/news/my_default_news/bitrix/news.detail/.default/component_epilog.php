<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<pre>
<?//var_dump($arResult);?>
</pre>
<?

if(is_array($arResult['AUTHOR_TEST']))
{
	$str = $arResult['NAME'] . ', ' . implode(',', $arResult['AUTHOR_TEST']) . '. ' . $arResult['DETAIL_TEXT_50'];
} else {
	$str = $arResult['NAME'];
}

$APPLICATION->SetPageProperty('description', $str);