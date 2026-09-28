<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Textarea',
    'category' => 'Data input',
    'description' => 'Textarea controls (`type => textarea`, or text columns) render with the daisyUI `textarea` class.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        [
            'name' => 'color',
            'type' => 'string',
            'default' => 'null',
            'values' => 'neutral, primary, secondary, accent, info, success, warning, error',
        ],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'ghost'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
