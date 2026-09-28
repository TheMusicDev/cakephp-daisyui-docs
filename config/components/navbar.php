<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\NavigationHelper;

return [
    'title' => 'Navbar',
    'category' => 'Navigation',
    'description' => 'Navigation bar at the top of the page.',
    'helper' => NavigationHelper::class,
    'method' => 'navbar',
    'options' => [
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
