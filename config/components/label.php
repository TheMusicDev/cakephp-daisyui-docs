<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Label',
    'category' => 'Data input',
    'description' => 'Control labels render as `fieldset-legend` above the field. With `floating => true` '
        . 'the label sits inside the field and moves above it on focus (text-like inputs).',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        ['name' => 'label', 'type' => 'string|array|false', 'default' => 'null', 'values' => 'Text (escaped), label options, or false'],
        [
            'name' => 'floating',
            'type' => 'bool',
            'default' => 'false',
            'values' => 'true = daisyUI floating label',
            'description' => 'The label text is also the placeholder unless you pass one; it is the field\'s accessible name.',
        ],
    ],
];
