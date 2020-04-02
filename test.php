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
);?> <section class="content_area"> <aside class="left_block"> <nav>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu_left",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "menu_left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'N'
)
);?></nav> </aside> </section>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.M.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_PREV_PICT_H" => "50",
		"LIST_PREV_PICT_W" => "50",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "150",
		"PROPERTY_CODE" => array(0=>"AUTHOR_TEST",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'N'
)
);?>
<?$APPLICATION->IncludeComponent(
	"mynamespace:photo.random", 
	"my_template1", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "my_template1",
		"DETAIL_URL" => "",
		"IBLOCKS" => "",
		"IBLOCK_ID" => array(
			0 => "7",
			1 => "8",
		),
		"IBLOCK_PROP" => "77",
		"IBLOCK_TYPE" => "goods_and_utilities",
		"IMG_HEIGHT" => "100",
		"IMG_WIDTH" => "100",
		"PARENT_SECTION" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?><?$APPLICATION->IncludeComponent("qsoft:stores.list", "stores_short", array(
	"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "stores_short",
		"DETAIL_URL" => "",
		"ELEMENTS_QUANTITY" => "2",
		"IBLOCKS" => "5",
		"IBLOCK_TYPE" => "salons",
		"ORDER" => "DESC",
		"PARENT_SECTION" => "",
		"SECTION_URL" => "/company/stores/",
		"SORT_FIELD" => "RAND"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumbs_qsoft", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "breadcrumbs_qsoft"
	),
	false
);?>

<?// echo $_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/logifle.log"; ?>
<?// echo '<br>' . SITE_TEMPLATE_PATH; ?>
<?
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/logifle.log")) {
//	echo 'EXISTS';
}
    	 //fwrite(fopen('logifle.log',"a"),"Hello");
    	 //fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"a"),"Hello321");
    	 //fclose('logifle.log');



?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>