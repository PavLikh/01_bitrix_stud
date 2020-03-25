<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая");
?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu_footer",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth_form_header",
	Array(
		"COMPONENT_TEMPLATE" => "auth_form_header",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/personal/",
		"REGISTER_URL" => "/auth/",
		"SHOW_ERRORS" => "N"
	)
);?>
	<section class="content_area">
		<aside class="left_block">
<nav>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu_left",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "menu_left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N"
	)
);?>
</nav>
</aside>
	</section>
		<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>