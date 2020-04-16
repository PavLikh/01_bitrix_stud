<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

define("DEFAULT_TEMPLATE_PATH", "/local/templates/.default");

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/event_handlers.php"))
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/event_handlers.php");

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/test_handler.php"))
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/test_handler.php");


AddEventHandler("main", "OnAfterUserAuthorize", Array("MyClass", "OnAfterUserAuthorizeHandler"));

class MyClass
{
    // создаем обработчик события "OnAfterUserAuthorize"
    public static function OnAfterUserAuthorizeHandler($arUser)
    {


    	CEvent::Send(
			 'AUTHORIZATION',
			 SITE_ID,
			 array(
				'USER_LOGIN' => $arUser['user_fields']['LOGIN'],
	    		//'SITE_NAME' => $arUser['user_fields']['LID'],
	    		'USER_MAIL' => $arUser['user_fields']['EMAIL'],
	    		'LAST_AUTH_TIME' => date('Y.d.m H:i:s'),
			 )

		);
    }
}




?>