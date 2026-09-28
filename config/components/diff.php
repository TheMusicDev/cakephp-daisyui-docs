<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Diff',
    'category' => 'Data display',
    'description' => 'A diff displays a side-by-side comparison of two items.',
    'helper' => DataDisplayHelper::class,
    'method' => 'diff',
    'options' => [
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
