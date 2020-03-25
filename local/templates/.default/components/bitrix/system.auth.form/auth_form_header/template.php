<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<!-- <div class="bx-system-auth-form"> -->

<?
// echo '<br>$arResult["AUTH_URL"]:  ';
// echo $arResult["AUTH_URL"];
// echo '<br>$arParams["REGISTER_URL"]:  ';
// echo $arParams["REGISTER_URL"];
// echo '<br>var_dump($arResult):  ';
// echo '<br>$arParams["USER_PROFILE_LINK"]:  ';
// echo $arParams['USER_PROFILE_LINK'];
// echo '<br>';
//var_dump($arParams);
?>
<!-- 					<nav class="top_menu grey inline-block">
						<a href="<?=$arParams["REGISTER_URL"];?>?register=yes" class="register">Регистрация</a>
						<a href="<?=$arParams["REGISTER_URL"];?>" class="auth">Авторизация</a>
					</nav> -->


<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

<?if($arResult["FORM_TYPE"] == "login"):?>
	<nav class="top_menu grey inline-block">
		<!-- <a href="<?=$arParams["REGISTER_URL"];?>?register=yes" class="register"><?=\Bitrix\Main\Localization\Loc::getMessage('AUTH_REGISTER')?></a> -->
		<a href="<?=$arResult["AUTH_REGISTER_URL"];?>" class="register"><?=\Bitrix\Main\Localization\Loc::getMessage('AUTH_REGISTER')?></a>
		<a href="<?=$arParams["REGISTER_URL"];?>" class="auth"><?=\Bitrix\Main\Localization\Loc::getMessage('auth_form_comp_auth')?></a>
	</nav>


<?
////Проверка на login
else:
?>

<!-- <form action="<?=$arResult["AUTH_URL"]?>">
	<h3>Zaregin</h3> -->
<!-- 	<table width="95%"> -->
<!-- 		<tr>
			<td align="center"> -->

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



<!-- 
			</td>
		</tr> -->
<!-- 		<tr>
			<td align="center">
			<?foreach ($arResult["GET"] as $key => $value):?>
				<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			<?endforeach?>
			<input type="hidden" name="logout" value="yes" />
			<input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
			</td>
		</tr> -->
<!-- 	</table> -->
<!-- </form> -->
<?endif?>
<!-- </div> -->
