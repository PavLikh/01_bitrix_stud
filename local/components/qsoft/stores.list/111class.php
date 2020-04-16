<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

class CDemoSqr extends CBitrixComponent
{
//     //Родительский метод проходит по всем параметрам переданным в $APPLICATION->IncludeComponent
//     //и применяет к ним функцию htmlspecialcharsex. В данном случае такая обработка избыточна.
//     //Переопределяем.
//     public function onPrepareComponentParams($arParams)
//     {
//         $result = array(
//             "CACHE_TYPE" => $arParams["CACHE_TYPE"],
//             "CACHE_TIME" => isset($arParams["CACHE_TIME"]) ?$arParams["CACHE_TIME"]: 36000000,
//             "X" => intval($arParams["X"]),
//         );
//         return $result;
//     }

//     public function sqr($x)
//     {
//         return $x * $x;
//     }

    protected function setEditButtons()
    {
        global $APPLICATION; // так и не избавились от глобальных переменных

        if (!$APPLICATION->GetShowIncludeAreas() || $this->showEditButtons === false)
        {
            return false;
        }

        $arButtons = \CIBlock::GetPanelButtons(
            $this->arParams['IBLOCK_ID'],
            $this->arResult['ID'],
            $this->arParams['SECTION_ID'],
            array("SECTION_BUTTONS"=>false, "SESSID"=>false)
        );

        $APPLICATION->SetEditArea(
            $this->getEditAreaId($this->arResult['ID']),
            \CIBlock::GetComponentMenu("configure",$arButtons));
       
    }


}?>