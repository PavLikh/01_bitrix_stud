<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

class StoreList extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
	{
		if(!isset($arParams["CACHE_TIME"]))
			$arParams["CACHE_TIME"] = 3600;

		if(!is_array($arParams["IBLOCKS"]))
			$arParams["IBLOCKS"] = array($arParams["IBLOCKS"]);
		
		return $arParams;
	}

	public function executeComponent()
	{
		$this->checkModules();
		$this->getResult();
		$this->IncludeComponentTemplate();
		
	}


	protected function checkModules()
	{
		if(!CModule::IncludeModule("iblock")) {
			$this->AbortResultCache();
			ShowError(Loc::getMessage("IBLOCK_MODULE_NOT_INSTALLED"));
			return;
		}
	}


	protected function getResult()
	{
		if($this->StartResultCache($this->arParams["CACHE_TIME"])) {
	

			$arParams = $this->arParams;
			$arResult = $this->arResult;

			//SELECT
			$arSelect = array(
				"ID",
				"IBLOCK_ID",
				"CODE",
				"PREVIEW_PICTURE",
				"PROPERTY_WORK_HOURS",
				"PROPERTY_PHONE",
				"PROPERTY_ADDRESS",

			);


			//ORDER BY
			$arSort = array(
				$arParams['SORT_FIELD'] => $arParams['ORDER'],
			);

			//WHERE
			$arFilter = array(
				"IBLOCK_ID" => $arParams["IBLOCKS"],
				"ACTIVE_DATE" => "Y",
				"ACTIVE"=>"Y",
			);

			if ($arParams['SHOW_MAP']) {
		  		$arSelect[] = 'PROPERTY_MAP';
		  		$arSelect[] = "SEARCHABLE_CONTENT";
			

				//EXECUTE
				$rsIBlockElement = CIBlockElement::GetList($arSort, $arFilter, false, false /*array("nTopCount" => $arParams['ELEMENTS_QUANTITY'])*/, $arSelect);

				?>

				<?
				$i = 0;
				while ($item = $rsIBlockElement->GetNext(true, false))
				{

					list($lat, $lon) = explode(',', $item['PROPERTY_MAP_VALUE']);
					$data[] = [
						'LAT' => $lat,
						'LON' => $lon,
						'TEXT' => $item["PROPERTY_ADDRESS_VALUE"],
					];
					//$arResult[$item['ID']] = $item;
					$arResult["ITEMS"][] = $item;
					if ($item['PREVIEW_PICTURE']) {
						//$imgIDs[] = $arResult[$item['ID']]["PREVIEW_PICTURE"];		
						$imgIDs[] = $arResult["ITEMS"][$i]["PREVIEW_PICTURE"];		

					}

					//$arResult[$i]['POSITION'] = $data;
					$i++;
				}

				$arResult['POSITION'] = $data;

				if (! empty($imgIDs)) {
					$res = CFile::GetList($arSort, array('@ID' => $imgIDs));
					while($res_arr = $res->GetNext())
					{
			    		$imgPath[$res_arr['ID']] = CFile::GetFileSRC($res_arr);
					}

					foreach ($arResult['ITEMS'] as $key => $item) {

								$arResult['ITEMS'][$key]['PICTURE']['SRC'] = $imgPath[$item['PREVIEW_PICTURE']];

					}
				}

				$this->arResult = $arResult;		
				$this->SetResultCacheKeys(array('POSITION',
				));

				//$this->setEditButtons();


			} else {

				//EXECUTE
				$rsIBlockElement = CIBlockElement::GetList($arSort, $arFilter, false, array("nTopCount" => $arParams['ELEMENTS_QUANTITY']), $arSelect);

				$i = 0;
				while ($item = $rsIBlockElement->GetNext(true, false))
				{


					//$arResult[$item['ID']] = $item;
					$arResult["ITEMS"][] = $item;
					if ($item['PREVIEW_PICTURE']) {
						//$imgIDs[] = $arResult[$item['ID']]["PREVIEW_PICTURE"];		
						$imgIDs[] = $arResult["ITEMS"][$i]["PREVIEW_PICTURE"];		

					}
					$i++;
				}

				if (! empty($imgIDs)) {
					$res = CFile::GetList($arSort, array('@ID' => $imgIDs));
					while($res_arr = $res->GetNext())
					{
			    		$imgPath[$res_arr['ID']] = CFile::GetFileSRC($res_arr);
					}

					foreach ($arResult['ITEMS'] as $key => $item) {

								$arResult['ITEMS'][$key]['PICTURE']['SRC'] = $imgPath[$item['PREVIEW_PICTURE']];

					}
				}

				 $this->arResult = $arResult;



				$this->SetResultCacheKeys(array(
				));


			}
		
	
		}
	}


}?>