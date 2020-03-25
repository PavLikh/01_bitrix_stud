<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>Text here....
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth_form_header",
	Array(
		"COMPONENT_TEMPLATE" => "auth_form_header",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/personal/",
		"REGISTER_URL" => "/auth/",
		"SHOW_ERRORS" => "N",
		"USER_PROFILE_LINK" => "/personal/profile/"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"",
	Array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "",
		"SHOW_ERRORS" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>