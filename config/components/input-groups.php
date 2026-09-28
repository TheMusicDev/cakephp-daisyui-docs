<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Input groups',
    'category' => 'Data input',
    'description' => '`prepend` / `append` put text or an icon inside a text-like field. As daisyUI requires, '
        . 'the `input` class (and its modifiers and error color) moves to a wrapping `<label>`.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        [
            'name' => 'prepend',
            'type' => 'string|array',
            'default' => 'null',
            'values' => "Text (escaped) or ['text' => '<svg…>', 'escape' => false]",
        ],
        [
            'name' => 'append',
            'type' => 'string|array',
            'default' => 'null',
            'values' => "Text (escaped) or ['text' => '<svg…>', 'escape' => false]",
        ],
    ],
];
