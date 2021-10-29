<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

$arTemplateParameters = [
    'USE_IMAGE_PLACEHOLDER' => [
        'NAME' => Loc::getMessage('SITE_QUICK_CONTACT_FORM_USE_IMG_PLACEHOLDER'),
        'TYPE' => 'CHECKBOX',
        'DEFAULT' => 'N',
    ],
    'PATH_TO_POST_ADD' => [
        'NAME' => Loc::getMessage('SITE_QUICK_CONTACK_FORM_PATH_TO_POST_ADD'),
        'TYPE' => 'TEXT',
        'DEFAULT' => '',
    ],
];