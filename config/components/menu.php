<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\NavigationHelper;

return [
    'title' => 'Menu',
    'category' => 'Navigation',
    'description' => 'Display a menu of items vertically or horizontally.',
    'helper' => NavigationHelper::class,
    'method' => 'menu',
    'options' => [
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'vertical, horizontal'],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'paged'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
