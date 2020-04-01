<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая обратная связь");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "student3@qsoft.ru",
		"EVENT_MESSAGE_ID" => array(
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>