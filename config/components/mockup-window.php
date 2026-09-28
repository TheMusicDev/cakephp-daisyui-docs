<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\MockupHelper;

return [
    'title' => 'Window Mockup',
    'category' => 'Mockup',
    'description' => 'A window mockup displays content inside a window frame.',
    'helper' => MockupHelper::class,
    'method' => 'window',
    'options' => [
        ['name' => 'contentClass', 'type' => 'string|array', 'default' => 'null', 'values' => 'Classes on content div'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
