<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?// IncludeTemplateLangFile(__FILE__); ?>
<? \Bitrix\Main\Localization\Loc::loadMessages(__FILE__);?>


				</div>
			</section>
			<div class="d_footer width_960"></div>
			<div class="clear"></div>
		</div>
<footer class="footer width_960">
			<section class="float_inner bottom_block">
				
				<?$APPLICATION->IncludeComponent(
	"qsoft:stores.list", 
	"stores_short", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"IBLOCKS" => "5",
		"IBLOCK_TYPE" => "salons",
		"PARENT_SECTION" => "",
		"COMPONENT_TEMPLATE" => "stores_short",
		"ELEMENTS_QUANTITY" => "2",
		"SECTION_URL" => "/company/stores/",
		"SORT_FIELD" => "RAND",
		"ORDER" => "DESC"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>







				<!-- <section class="shops_block">
					<h2 class="inline-block">Наши салоны</h2>
					<span class="dark_grey all_list">&nbsp;/&nbsp;<a href="#" class="text_decor_none"><b>Все</b></a></span>
					<div>
						<figure class="shops_block_item">
							<a href=""><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/test_shop_1.png" alt="" title="" /></a>
							<figcaption class="shops_block_item_description">
								<h3 class="shops_block_item_name">Салон на братиславской</h3>
								<p class="dark_grey">Москва, ул. Братиславская, дом 23</p>
								<p class="black">+7 495 987 65 43</p>
								<p>Часы работы:<br/> c 9.00 до 21.00</p>
							</figcaption>
						</figure>
						<figure class="shops_block_item">
							<a href=""><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/test_shop_2.png" alt="" title="" /></a>
							<figcaption class="shops_block_item_description">
								<h3 class="shops_block_item_name">Салон на братиславской</h3>
								<p class="dark_grey">Москва, ул. Братиславская, дом 23</p>
								<p class="black">+7 495 987 65 43</p>
								<p>Часы работы:<br/> c 9.00 до 21.00</p>
							</figcaption>
						</figure>
					</div>
				</section> -->
				<section class="info_block left_block_shadow">

					<h2><?=\Bitrix\Main\Localization\Loc::getMessage('INFORMATION')?></h2>

					<nav class="menu_footer grey">

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
					</nav>
				</section>
			</section>
			<div class="footer_inner">
				<a href="http://www.qsoft.ru" target="_blank" class="qsoft grey inline-block">Сделано в</a>
				<div class="copy">&copy; 2013 Рога &amp; Сила. Продажа автомобилей.</div>
			</div>
		</footer>
	</body>
</html>
