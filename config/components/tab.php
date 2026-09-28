<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\NavigationHelper;

return [
    'title' => 'Tabs',
    'category' => 'Navigation',
    'description' => 'Tabs show a list of links in a tabbed format.',
    'helper' => NavigationHelper::class,
    'method' => 'tabs',
    'options' => [
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'box, border, lift'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'placement', 'type' => 'string', 'default' => 'null', 'values' => 'top, bottom'],
        ['name' => 'name', 'type' => 'string', 'default' => 'null', 'values' => 'Radio group name for content mode (auto-generated if omitted)', 'description' => 'Only used in content mode when any item has `content`.'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
