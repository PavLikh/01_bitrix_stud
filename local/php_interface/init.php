<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

define("DEFAULT_TEMPLATE_PATH", "/local/templates/.default");

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/event_handlers.php"))
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/event_handlers.php");

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/test_handler.php"))
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/test_handler.php");

?>