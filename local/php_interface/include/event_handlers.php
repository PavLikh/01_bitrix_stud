<?
define('CATALOG_IBLOCK_ID',7);
define('FEEDBACK_IBLOCK_ID',8);

//use \Bitrix\Main\Diag\Debug;
// файл /bitrix/php_interface/init.php
// регистрируем обработчик


//учебный обработчик на изменение элемента
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("CIBlockHandler", "OnBeforeIBlockElementUpdateHandler"));

class CIBlockHandler
{
    // создаем обработчик события "OnBeforeIBlockElementUpdate"
    function OnBeforeIBlockElementUpdateHandler(&$arFields)
    {

        if ($arFields['IBLOCK_ID'] == CATALOG_IBLOCK_ID) {


            $db_props = CIBlockElement::GetProperty($arFields['IBLOCK_ID'], $arFields['ID'], array("sort" => "asc"), Array("CODE"=>"PRICE"));
            
            if ($ar_props = $db_props->Fetch()){
                if(strlen($arFields["PROPERTY_VALUES"][$ar_props['ID']][$ar_props['PROPERTY_VALUE_ID']]['VALUE']) > 0){
                    $arFields["PROPERTY_VALUES"][$ar_props['ID']][$ar_props['PROPERTY_VALUE_ID']]['VALUE'] = preg_replace("/[^\d]/", "", $arFields["PROPERTY_VALUES"][$ar_props['ID']][$ar_props['PROPERTY_VALUE_ID']]['VALUE']);



                    fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"a"),date("c")." ".print_r($arFields["PROPERTY_VALUES"][$ar_props['ID']][$ar_props['PROPERTY_VALUE_ID']]['VALUE'],true)."\n");
                    //fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"a"),date("c")." ".print_r($ar_props,true)."\n");



                    //fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"a"),date("c")."WORKING IN IF");  
               }
                    
                    //fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"w"),date("c")." ".print_r($ar_props,true)."\n");


            }

                    //fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"a"),date("c")."WORKING OUTSIDE IF."\n"");
                    //fclose($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log');


                //if(strlen($arFields["PROPERTY_VALUES"][$ar_props['ID']][$ar_props['PROPERTY_VALUE_ID']]['VALUE']) > 0){
                    
                    // $arFields["PROPERTY_VALUES"][$ar_props['ID']][$ar_props['PROPERTY_VALUE_ID']]['VALUE'] = preg_replace("/[^\d]/","", $arFields["PROPERTY_VALUES"][$ar_props['ID']][$ar_props['PROPERTY_VALUE_ID']]['VALUE']);
                    //$arFields["PROPERTY_VALUES"][$ar_props['ID']][$ar_props['PROPERTY_VALUE_ID']]['VALUE'] += 12;
                   //var_dump($arFields); 
               //}
            //}
        }


    }
}



// файл /bitrix/php_interface/init.php
// регистрируем обработчик

//учебный обработчик на отправку письма из формы обратной связи
AddEventHandler("main", "OnBeforeEventAdd", array("CMainHandler", "OnBeforeEventAddHandler"));
AddEventHandler("main", "OnBeforeUserAdd", Array("CMainHandler", "OnBeforeUserAddHandler"));

class CMainHandler
{


        function OnBeforeEventAddHandler(&$event, &$lid, &$arFields)
    {

         

        if ($event == 'FEEDBACK_FORM') {



            if (CModule::IncludeModule("iblock"))
            {

                //fwrite(fopen($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log',"a"),date("c")."WORKING IncludeModule EVEnt\n");

                $el = new CIBlockElement;
                $arLoadProductArray = array(
                    "IBLOCK_ID" => FEEDBACK_IBLOCK_ID,
                    "NAME" => $arFields["AUTHOR"],
                    "DETAIL_TEXT" => $arFields["TEXT"],
                    "DATE_ACTIVE_FROM" => ConvertTimeStamp(false, "FULL"),

                );
                $el->Add($arLoadProductArray);
            }
        }

    //fclose($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/logifle.log');
    }



    // создаем обработчик события "OnBeforeUserAdd"
    function OnBeforeUserAddHandler(&$arFields)
    {
        if($arFields["LAST_NAME"] == $arFields["NAME"])
        {
            global $APPLICATION;
            $APPLICATION->throwException("Имя и фамилия одинаковы");
            return false;
        }
    }
}


?>