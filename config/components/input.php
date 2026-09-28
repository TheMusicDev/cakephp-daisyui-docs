<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Input',
    'category' => 'Data input',
    'description' => 'Text-like controls (text, email, password, number, tel, url, search, date, time, '
        . 'datetime-local, month, week) render with the daisyUI `input` class. A validation error '
        . 'replaces the chosen color with `input-error`.',
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
