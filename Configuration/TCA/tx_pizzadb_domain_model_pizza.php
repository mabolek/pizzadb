<?php

declare(strict_types=1);

$lll = 'LLL:EXT:pizzadb/Resources/Private/Language/locallang_tca.xlf:pizza';

return [
    'ctrl' => [
        'title' => $lll,
        'label' => 'name',
        'label_alt' => 'price_eat_in',
        'label_alt_force' => false,
        'iconfile' => 'EXT:pizzadb/Resources/Public/Icons/Extension.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'searchFields' => 'name,ingredients,description',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'palettes' => [
        'prices' => [
            'label' => $lll . '.prices',
            'showitem' => 'price_takeaway, price_eat_in',
        ],
        'visibility' => [
            'showitem' => 'hidden, starttime, endtime',
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => '
                name, ingredients, description,
                --palette--;;prices,
                image,
                --div--;core.form.tabs:access,
                --palette--;;visibility,
            ',
        ],
    ],
    'columns' => [
        'name' => [
            'label' => $lll . '.name',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'required' => true,
                'eval' => 'trim',
            ],
        ],
        'ingredients' => [
            'label' => $lll . '.ingredients',
            'description' => $lll . '.ingredients.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 6,
                'required' => true,
            ],
        ],
        'description' => [
            'label' => $lll . '.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
        'price_takeaway' => [
            'label' => $lll . '.price_takeaway',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size' => 10,
                'default' => 0.00,
                'range' => [
                    'lower' => 0,
                ],
            ],
        ],
        'price_eat_in' => [
            'label' => $lll . '.price_eat_in',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size' => 10,
                'default' => 0.00,
                'range' => [
                    'lower' => 0,
                ],
            ],
        ],
        'image' => [
            'label' => $lll . '.image',
            'config' => [
                'type' => 'file',
                'allowed' => 'common-image-types',
                'maxitems' => 1,
            ],
        ],
    ],
];
