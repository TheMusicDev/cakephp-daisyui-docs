<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'OTP',
    'category' => 'Data input',
    'description' => '`type => otp` renders a one-time-code field: a daisyUI `otp` label with one box per digit and '
        . 'a text input with `autocomplete="one-time-code"`, `inputmode="numeric"` and matching `maxlength`/`pattern`.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        ['name' => 'type', 'type' => 'string', 'default' => 'null', 'values' => "'otp'"],
        ['name' => 'length', 'type' => 'int', 'default' => '6', 'values' => '4, 5, 6'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        [
            'name' => 'color',
            'type' => 'string',
            'default' => 'null',
            'values' => 'neutral, primary, secondary, accent, info, success, warning, error',
        ],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'joined'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the otp label'],
    ],
];
