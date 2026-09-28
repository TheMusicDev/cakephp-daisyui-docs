<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\LayoutHelper;

return [
    'title' => 'Mask',
    'category' => 'Layout',
    'description' => 'Crops an image to a shape.',
    'helper' => LayoutHelper::class,
    'method' => 'mask',
    'options' => [
        ['name' => 'alt', 'type' => 'string', 'default' => "''", 'values' => 'Alt text for the image'],
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'squircle, heart, hexagon, hexagon-2, decagon, pentagon, diamond, circle, star, star-2, triangle, triangle-2, triangle-3, triangle-4'],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'half-1, half-2'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
