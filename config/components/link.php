<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\NavigationHelper;

return [
    'title' => 'Link',
    'category' => 'Navigation',
    'description' => 'Links with daisyUI styling.',
    'helper' => NavigationHelper::class,
    'method' => 'link',
    'options' => [
        ['name' => 'color', 'type' => 'string', 'default' => 'null', 'values' => 'neutral, primary, secondary, accent, success, info, warning, error'],
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'hover'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output text as raw HTML'],
    ],
];
