<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?require($_SERVER["DOCUMENT_ROOT"]."/local/templates/roga_i_sila_main/header.php");?>

	<nav class="nav_chain">
							<a href="/">Главная</a>
							<span class="nav_arrow inline-block"></span>
							<span>Легковые</span>
					</nav>
					<section class="content_area">
						<aside class="left_block">
						<nav>
							 					<?$APPLICATION->IncludeComponent(
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
						);?>
<!-- 							<ul class="left_menu">
								<li>
									<span>Информация</span>
									<ul>
										<li><a href="#">О компании</a></li>
										<li><a href="#" class="selected">Контактная информация</a></li>
										<li><a href="#">Условия продаж</a></li>
										<li><a href="#">Финансовый отдел</a></li>
										<li><a href="#">Для клиентов</a></li>
									</ul>
								</li>
							</ul> -->
						</nav>
					</aside>
						<h1><? $APPLICATION->ShowTitle(false); ?></h1>
