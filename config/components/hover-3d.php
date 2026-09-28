<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Hover 3D',
    'category' => 'Data display',
    'description' => 'A hover 3D card displays content with a 3D hover effect.',
    'helper' => DataDisplayHelper::class,
    'method' => 'hover3d',
    'options' => [
        ['name' => 'url', 'type' => 'string', 'default' => 'null', 'values' => 'Optional link URL; renders as <a>'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
