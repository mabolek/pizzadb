<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

$cType = ExtensionUtility::registerPlugin(
    'Pizzadb',
    'Menu',
    'LLL:EXT:pizzadb/Resources/Private/Language/locallang_tca.xlf:plugin.menu',
    'EXT:pizzadb/Resources/Public/Icons/Extension.svg',
    'plugins',
);

$GLOBALS['TCA']['tt_content']['types'][$cType]['showitem'] = '
    --div--;core.form.tabs:general,
        --palette--;;headers,
        pages,
    --div--;core.form.tabs:appearance,
        --palette--;;frames,
    --div--;core.form.tabs:access,
        --palette--;;hidden,
        --palette--;;access,
';
