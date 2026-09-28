<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'List',
    'category' => 'Data display',
    'description' => 'Lists show information in rows in a vertical layout.',
    'helper' => DataDisplayHelper::class,
    'method' => 'list',
    'options' => [
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
