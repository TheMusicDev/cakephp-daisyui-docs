<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\NavigationHelper;

return [
    'title' => 'Megamenu',
    'category' => 'Navigation',
    'description' => 'A large horizontal menu with items that open popovers.',
    'helper' => NavigationHelper::class,
    'method' => 'megamenu',
    'options' => [
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'wide, full'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'vertical'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
