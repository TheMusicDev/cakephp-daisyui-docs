<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Carousel',
    'category' => 'Data display',
    'description' => 'A carousel displays images or content in a scrollable area.',
    'helper' => DataDisplayHelper::class,
    'method' => 'carousel',
    'options' => [
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'start, center, end'],
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'horizontal, vertical'],
        ['name' => 'itemClass', 'type' => 'string|array', 'default' => 'null', 'values' => 'Classes applied to all items'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
