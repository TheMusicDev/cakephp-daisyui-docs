<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\MockupHelper;

return [
    'title' => 'Phone Mockup',
    'category' => 'Mockup',
    'description' => 'A phone mockup displays content inside a phone frame.',
    'helper' => MockupHelper::class,
    'method' => 'phone',
    'options' => [
        ['name' => 'displayClass', 'type' => 'string|array', 'default' => 'null', 'values' => 'Classes on display div'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
