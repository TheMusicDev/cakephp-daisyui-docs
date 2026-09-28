<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Select',
    'category' => 'Data input',
    'description' => 'Select controls (`options`, `*_id` fields, `type => select`) render with the daisyUI '
        . '`select` class. `size` is the daisyUI size, not the HTML `size` attribute. '
        . '`multiple => checkbox` renders checkboxes instead (see Checkbox).',
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
