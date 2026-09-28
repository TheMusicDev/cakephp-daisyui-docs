<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Stat',
    'category' => 'Data display',
    'description' => 'Stat shows numbers and data in a block.',
    'helper' => DataDisplayHelper::class,
    'method' => 'stats',
    'options' => [
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'horizontal, vertical'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
