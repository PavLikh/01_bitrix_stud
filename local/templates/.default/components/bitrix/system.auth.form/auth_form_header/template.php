<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//CJSCore::Init();
?>


<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>
<?if($arResult["FORM_TYPE"] == "login"):?>
	<nav class="top_menu grey inline-block">

		<a href="<?=$arResult["AUTH_REGISTER_URL"];?>" class="register"><?=\Bitrix\Main\Localization\Loc::getMessage('AUTH_REGISTER')?></a>
		
		<a href="<?=$arParams["AUTH_URL"]?>?backurl=<?=$arResult['BACKURL'] ?? '' ;?>" class="auth"><?=\Bitrix\Main\Localization\Loc::getMessage('auth_form_comp_auth')?></a>
	</nav>

<?
////Проверка на login
else:
?>


	<nav class="top_menu grey inline-block authorize">
		<span><?=GetMessage("AUTH_USER_HELLO")?></span>
		<a href="<?=$arParams['USER_PROFILE_LINK'];?>"><b class="user_name"><?=$arResult["USER_NAME"]?></b></a>
		<a href="<?=$arParams["PROFILE_URL"]?>"><?=GetMessage("AUTH_PROFILE")?></a>
		<a class="logout" href="<?echo $APPLICATION->GetCurPageParam("logout=yes", array(
		     "login",
		     "logout",
		     "register",
		     "forgot_password",
		     "change_password"));?>"><?=\Bitrix\Main\Localization\Loc::getMessage("AUTH_LOGOUT_BUTTON")?></a>
	</nav>

<?endif?>
<!-- </div> -->
