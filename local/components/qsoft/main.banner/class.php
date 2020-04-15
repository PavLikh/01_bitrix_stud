<?php

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (!\Bitrix\Main\Loader::includeModule('advertising'))
	return;

Loc::loadMessages(__FILE__);

CBitrixComponent::includeComponentClass('bitrix:advertising.banner');

class AdvertisingBannerQsoft extends AdvertisingBanner
{

	public function onPrepareComponentParams($params)
	{

	    $params = parent::onPrepareComponentParams($params);

	    	global $USER;
	    	if (! $USER->IsAuthorized()) {
	    	$params['QUANTITY'] = 1;
	   		}


			return $params;
	}

}