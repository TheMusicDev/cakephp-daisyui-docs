<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\LayoutHelper;

return [
    'title' => 'Hero',
    'category' => 'Layout',
    'description' => 'A hero section with optional overlay.',
    'helper' => LayoutHelper::class,
    'method' => 'hero',
    'options' => [
        ['name' => 'overlay', 'type' => 'bool', 'default' => 'false', 'values' => 'true = show overlay'],
        ['name' => 'contentClass', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the content'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
