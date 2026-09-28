<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Range',
    'category' => 'Data input',
    'description' => '`type => range` controls render as daisyUI range sliders. `min`/`max` default to 0/100 '
        . '(daisyUI requires both).',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        [
            'name' => 'color',
            'type' => 'string',
            'default' => 'null',
            'values' => 'neutral, primary, secondary, accent, success, warning, info, error',
        ],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'vertical'],
        ['name' => 'min', 'type' => 'int|float', 'default' => '0', 'values' => 'Lowest value'],
        ['name' => 'max', 'type' => 'int|float', 'default' => '100', 'values' => 'Highest value'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
