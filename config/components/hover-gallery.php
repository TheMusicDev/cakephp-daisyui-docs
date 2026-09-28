<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Hover Gallery',
    'category' => 'Data display',
    'description' => 'A hover gallery displays a collection of images with hover effects.',
    'helper' => DataDisplayHelper::class,
    'method' => 'hoverGallery',
    'options' => [
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
