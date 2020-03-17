<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 ошибка: Страница не найдена");?>
	<div class="bx-404-container">
		<div class="bx-404-block"><img src="<?=SITE_DIR?>images/404.png" alt=""></div>
		<div class="bx-404-text-block">К сожалению, такая страница не найдена. <br>Данная страница была удалена с сайта, либо ее никогда не существовало.</div>
		<div class="">Вы можете вернуться на <a href="<?=SITE_DIR?>">Главную</a> или воспользоваться <a href="<?=SITE_DIR.search ?>">поиском.</a></div>
		<div class="">Если вы хотите что-то сообщить, напишите нам с помощью <a href="<?=SITE_DIR . 'company/contacts' ?>">формы обратной связи.</a></div>
	</div>
	<div class="map-columns row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="bx-maps-title"></div>
		</div>
	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>