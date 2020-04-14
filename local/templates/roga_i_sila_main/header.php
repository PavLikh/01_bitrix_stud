<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
//IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html>
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8> <![endif]-->
<!--[if IE 9]>    <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
	<head>

		<? $APPLICATION->ShowHead(); ?>
		<title><? $APPLICATION->ShowTitle(); ?></title>
		<? use Bitrix\Main\Page\Asset; ?>

		<link href="<?=DEFAULT_TEMPLATE_PATH?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />

		<?
			Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/base.css"); 
			Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/bxslider/jquery.bxslider.css");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery-1.9.1.min.js");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.placeholder.js");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/bxslider/jquery.bxslider.js");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/default_script.js"); 

			Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.core.css"); 
			Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.theme.css");
			Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.selectmenu.css");

			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.core.js");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.widget.js");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.position.js");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.selectmenu.js");
		?>
		<!--[if lt IE 9]>
			<script src="<?=DEFAULT_TEMPLATE_PATH?>/js/html5shiv.js"></script>
		<![endif]-->
			</head>
	<body>
		<? $APPLICATION->ShowPanel(); ?>
		<div class="wrapper">
			<div class="base_layer"></div>
			<header class="header">
				<div class="width_960">
					<div class="item-logo">
						<!-- <span class="logo inline-block"></span> -->
						<a href="/" class="logo inline-block"></a>
					</div>
<!-- 					<nav class="top_menu grey inline-block">
						<a href="#" class="register">Регистрация</a>
						<a href="#" class="auth">Авторизация</a>
					</nav> -->

 					<?
 					$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_form_header", 
	array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/personal/",
		"REGISTER_URL" => "/auth/",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth_form_header",
		"USER_PROFILE_LINK" => "/personal/profile/",
		"AUTH_URL" => "/auth/"
	),
	false
);
					?>





					<div class="basket_block">
						<a href="#" class="basket_product_count inline-block">0</a>
						<a href="#" class="order_button pie">Оформить заказ</a>
					</div>
				</div>
			</header>
			<section class="fixed_block">
				<div class="width_960">
					<form name="search_form" class="search_form pie">
						<div class="search_form_wrapper">
							<input type="text" placeholder="Поиск по сайту"/>
							<input type="submit" value=""/>
						</div>
					</form>

						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"catalog_top",
							Array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"COMPONENT_TEMPLATE" => "catalog_top",
								"DELAY" => "N",
								"MAX_LEVEL" => "2",
								"MENU_CACHE_GET_VARS" => array(),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "Y"
							)
						);?>	


<!-- 					<nav class="main_menu">
						<ul>
							<li class="submenu pie">
								<a href="#">Легковые</a>
								<div class="submenu_border"></div>
								<ul>
									<li><a href="#">Седаны</a></li>
									<li><a href="#">Хетчбеки</a></li>
									<li><a href="#">Универсалы</a></li>
									<li><a href="#">Купе</a></li>
									<li><a href="#">Родстеры</a></li>
								</ul>
							</li>
							<li class="submenu pie">
								<a href="#">Внедорожники</a>
								<div class="submenu_border"></div>
								<ul>
									<li><a href="#">Рамные</a></li>
									<li><a href="#">Пикапы</a></li>
									<li><a href="#">Кроссоверы</a></li>
								</ul>
							</li>
							<li><a href="#">Раритетные</a></li>
							<li><a href="#">Распродажа</a></li>
							<li><a href="#">Новинки</a></li>
						</ul>
					</nav> -->
				</div>
			</section>
			<section class="content">
				<div class="work_area width_960">