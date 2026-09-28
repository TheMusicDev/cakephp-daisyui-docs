<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Checkbox',
    'category' => 'Data input',
    'description' => 'Checkbox controls (boolean fields, `type => checkbox`) render inside a `label` with the '
        . 'daisyUI `checkbox` class. `multiple => checkbox` renders a `<fieldset>` whose `<legend>` names the group.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        [
            'name' => 'color',
            'type' => 'string',
            'default' => 'null',
            'values' => 'primary, secondary, accent, neutral, success, warning, info, error',
        ],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        [
            'name' => 'multiple',
            'type' => 'string',
            'default' => 'null',
            'values' => "'checkbox' (with options)",
            'description' => 'One checkbox per option, grouped in a fieldset/legend.',
        ],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on each checkbox'],
    ],
];
