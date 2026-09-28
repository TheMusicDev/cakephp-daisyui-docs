<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\NavigationHelper;

return [
    'title' => 'Dock',
    'category' => 'Navigation',
    'description' => 'A dock (bottom navigation) component for navigation items.',
    'helper' => NavigationHelper::class,
    'method' => 'dock',
    'options' => [
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
