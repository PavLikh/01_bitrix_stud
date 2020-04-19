<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$userName = CUser::GetFullName();
if (!$userName)
	$userName = CUser::GetLogin();
?>
<script>
	<?if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0 && preg_match('#^/\w#', $_REQUEST["backurl"])):?>
	document.location.href = "<?=CUtil::JSEscape($_REQUEST["backurl"])?>";
	<?endif?>
</script>

<?
$APPLICATION->SetTitle("Авторизация");
?>

<?if($_REQUEST["TYPE"] === 'REGISTRATION') :?>

	<p>Добро пожаловать!</p>
	<p>	 
		 Пожалуйста, проверьте Ваш e-mail – мы отправили Вам приветственное письмо.
		 Теперь у Вас есть возможность:
	</p>
	<ul>
		<li>Сохранять в Личном кабинете персональные данные</li>
		<li>Легко отслеживать статус Вашего заказа в режиме online</li>
		<li>В любой момент просмотреть историю Ваших заказов</li>
	</ul>
	<p>Что Вы хотите сделать прямо сейчас?</p>
	
	<?$APPLICATION->SetTitle("Благодарим Вас за регистрацию в интернет-магазине «Рога и сила»!");?>
 
<?else:?>

	<p>Вы зарегистрированы и успешно авторизовались.</p>
 
	<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>
<?endif?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>