<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

?>


		<?
			//получаем ссылки для редактирования и удаления элемента
			$arButtons = CIBlock::GetPanelButtons(
			$arParams['IBLOCKS'],
			0,
			array("SECTION_BUTTONS"=>false, "SESSID"=>false)
			);
			$arItem["ADD_LINK"] = $arButtons["edit"]["add_element"]["ACTION_URL"];
			$this->AddEditAction($arParams['IBLOCKS'], $arItem["ADD_LINK"], "Добавить салон", Array("ICON" => "bx-context-toolbar-create-icon",));

		?>

 	<section class="shops_block">

		<div id="<?=$this->GetEditAreaId($arParams['IBLOCKS']);?>">
<??>
<pre>
<?//var_dump($arResult);?>

</pre>
		<?foreach ($arResult['ITEMS'] as $key => $arItem):?>
		<?if($key !== "POSITION"):?>
		<?
			//получаем ссылки для редактирования и удаления элемента
			// $arButtons = CIBlock::GetPanelButtons(
			// $arItem["IBLOCK_ID"],
			// $arItem["ID"],
			// 0,
			// array("SECTION_BUTTONS"=>false, "SESSID"=>false)
			// );
			// $arItem["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
			// $arItem["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];
		?>	


			<?
			//$this->AddEditAction($arItem['ID'], $arItem['ADD_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_ADD"));//Array("ICON" => "bx-context-toolbar-create-icon",));
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

					<figure class="shops_block_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<a href=""><img src="<?=$arItem["PICTURE"]["SRC"] ?? NO_IMAGE_PATH ?>" alt="" title="" /></a>
						<figcaption class="shops_block_item_description">
							<h3 class="shops_block_item_name"><?=$arItem["NAME"]?></h3>
							<p class="dark_grey"><?=$arItem["PROPERTY_ADDRESS_VALUE"]?></p>
							<p class="black"><?=$arItem["PROPERTY_PHONE_VALUE"]?></p>
							<p><?=\Bitrix\Main\Localization\Loc::getMessage('OPENING_HOURSE')?><br/><?=$arItem["PROPERTY_WORK_HOURS_VALUE"]?></p>
						</figcaption>
					</figure>

				
				<?endif?>

		<?endforeach?>
		</div>

	</section>

