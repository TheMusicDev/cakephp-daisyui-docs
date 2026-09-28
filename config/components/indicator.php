<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\LayoutHelper;

return [
    'title' => 'Indicator',
    'category' => 'Layout',
    'description' => 'An indicator element at the corner of another element.',
    'helper' => LayoutHelper::class,
    'method' => 'indicator',
    'options' => [
        ['name' => 'placement', 'type' => 'string|array', 'default' => 'null', 'values' => 'start, center, end, top, middle, bottom (can combine horizontal + vertical)'],
        ['name' => 'itemClass', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the indicator item'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
