<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Radio',
    'category' => 'Data input',
    'description' => 'Radio controls (`type => radio` with `options`) render as a `<fieldset>` whose `<legend>` '
        . 'names the group, each daisyUI `radio` inside its own `label`.',
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
        ['name' => 'label', 'type' => 'string|false', 'default' => 'null', 'values' => 'Legend text (escaped) or false'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on each radio'],
    ],
];
