<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\LayoutHelper;

return [
    'title' => 'Join',
    'category' => 'Layout',
    'description' => 'Join groups items (typically buttons or inputs). Use joinItemClass() to add the join-item class to elements inside a join.',
    'helper' => LayoutHelper::class,
    'method' => 'join',
    'options' => [
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'vertical, horizontal'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
