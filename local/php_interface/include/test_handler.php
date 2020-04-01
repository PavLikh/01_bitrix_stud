<?

// файл /bitrix/php_interface/init.php
// регистрируем обработчик
// AddEventHandler("main", "OnAfterUserAuthorize", Array("MyClass", "OnAfterUserAuthorizeHandler"));

// class MyClass
// {
//     // создаем обработчик события "OnAfterUserAuthorize"
//     public static function OnAfterUserAuthorizeHandler($arUser)
//     {


//     	//fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"a"),date("c")." ".print_r($arUser,true)."\n");

//     	//$a['USER_LOGIN'] = $arUser['user_fields']['LOGIN'];
//     	//$a['SITE_NAME'] = $arUser['user_fields']['LID'];
//     	//$a['USER_MAIL'] = $arUser['user_fields']['EMAIL'];
//     	//$a['LAST_AUTH_TIME'] = $arUser['user_fields']['LAST_LOGIN'];
//     	//$a['LAST_AUTH_TIME'] = date('Y.d.m H:i:s');
//          // выполняем все действия связанные с авторизацией
//     	CEvent::Send(
// 			 'AUTHORIZATION',
// 			 SITE_ID,
// 			 array(
// 				'USER_LOGIN' => $arUser['user_fields']['LOGIN'],
// 	    		//'SITE_NAME' => $arUser['user_fields']['LID'],
// 	    		'USER_MAIL' => $arUser['user_fields']['EMAIL'],
// 	    		'LAST_AUTH_TIME' => date('Y.d.m H:i:s'),
// 			 )

// 			 //string duplicate="Y",
// 			 //int message_id="",
// 			 //array files,
// 			 //string language_id
// 		);
//     	//fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"a"),date("c")." ".print_r($a,true)."\n");
      
//     }
// }



?>