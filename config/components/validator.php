<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Validator',
    'category' => 'Data input',
    'description' => '`validator => true` lets the browser\'s native validation color input, select and '
        . 'textarea fields (error or success). `hint` adds a `validator-hint` below the field.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        [
            'name' => 'validator',
            'type' => 'bool',
            'default' => 'false',
            'values' => 'true',
            'description' => 'Input, select and textarea only; anything else throws.',
        ],
        ['name' => 'hint', 'type' => 'string', 'default' => 'null', 'values' => 'Plain text (escaped)'],
    ],
];
