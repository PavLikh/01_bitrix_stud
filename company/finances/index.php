<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>Text here....
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs_qsoft",
	Array(
		"COMPONENT_TEMPLATE" => "breadcrumbs_qsoft",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_form_header", 
	array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "/auth/",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth_form_header",
		"AUTH_URL" => "/auth/"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>