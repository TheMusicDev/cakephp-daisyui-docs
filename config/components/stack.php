<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\LayoutHelper;

return [
    'title' => 'Stack',
    'category' => 'Layout',
    'description' => 'Stacks elements on top of each other.',
    'helper' => LayoutHelper::class,
    'method' => 'stack',
    'options' => [
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'top, bottom, start, end'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
