<?php

declare(strict_types=1);

use Benni\Pizzadb\Controller\PizzaController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'Pizzadb',
    'Menu',
    [PizzaController::class => 'list'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
);
