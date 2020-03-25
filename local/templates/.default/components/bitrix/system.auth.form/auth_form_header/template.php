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
// var_dump($arParams);
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
		<a href="<?=$arParams["REGISTER_URL"];?>?register=yes" class="register">Регистрация</a>
		<a href="<?=$arParams["REGISTER_URL"];?>" class="auth">Авторизация</a>
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
				<nav class="top_menu grey inline-block">
				<a href="<?=$arParams['USER_PROFILE_LINK'];?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_USER_HELLO")?><?=$arResult["USER_NAME"]?></a><br />


				<a href="<?=$arParams["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br />

				<a href="<?echo $APPLICATION->GetCurPageParam("logout=yes", array(
				     "login",
				     "logout",
				     "register",
				     "forgot_password",
				     "change_password"));?>"><?=GetMessage("AUTH_LOGOUT_BUTTON")?></a>
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
