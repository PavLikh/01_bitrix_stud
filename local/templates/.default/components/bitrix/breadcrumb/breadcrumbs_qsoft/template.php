<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()

// $css = $APPLICATION->GetCSSArray();
// if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
// {
// 	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
// }

$strReturn .= '<nav class="nav_chain">';
$a = $arResult;
$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = '<span class="nav_arrow inline-block"></span>';

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<a href="' . $arResult[$index]["LINK"] . '">' . $title . '</a>'. $arrow;
	}
	else
	{
		$strReturn .= '
				<span>' . $title . '</span>
				';
	}
}

$strReturn .= '</nav>';

//return $a;
return $strReturn;
