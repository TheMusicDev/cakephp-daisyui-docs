<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\NavigationHelper;

return [
    'title' => 'Steps',
    'category' => 'Navigation',
    'description' => 'Steps shows a sequence in a process.',
    'helper' => NavigationHelper::class,
    'method' => 'steps',
    'options' => [
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'vertical, horizontal'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
