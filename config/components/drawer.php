<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\LayoutHelper;

return [
    'title' => 'Drawer',
    'category' => 'Layout',
    'description' => 'A sidebar drawer layout component.',
    'helper' => LayoutHelper::class,
    'method' => 'drawer',
    'options' => [
        ['name' => 'overlayLabel', 'type' => 'string', 'default' => '__("Close sidebar")', 'values' => 'Aria label for the overlay'],
        ['name' => 'placement', 'type' => 'string', 'default' => 'null', 'values' => 'end'],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'open'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
