<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Toggle',
    'category' => 'Data input',
    'description' => '`type => toggle` renders a checkbox styled as a daisyUI switch, inside a `label`.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        ['name' => 'type', 'type' => 'string', 'default' => 'null', 'values' => "'toggle'"],
        [
            'name' => 'color',
            'type' => 'string',
            'default' => 'null',
            'values' => 'primary, secondary, accent, neutral, success, warning, info, error',
        ],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
