<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arTemplateParameters = array(
	"USER_PROFILE_LINK"=>array(
		//"NAME" => GetMessage("USER_PROFILE_LINK"),
		"NAME" => \Bitrix\Main\Localization\Loc::getMessage("USER_PROFILE_LINK"),
		"TYPE" => "STRING",
		"DEFAULT" => "/personal/profile/",	
	),
);
$arTemplateParameters = array(
	"AUTH_URL"=>array(
		//"NAME" => GetMessage("USER_PROFILE_LINK"),
		"NAME" => \Bitrix\Main\Localization\Loc::getMessage("AUTH_URL"),
		"TYPE" => "STRING",
		"DEFAULT" => "",	
	),
);
?>