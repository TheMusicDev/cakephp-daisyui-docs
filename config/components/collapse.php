<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Collapse',
    'category' => 'Data display',
    'description' => 'Collapse shows and hides content.',
    'helper' => DataDisplayHelper::class,
    'method' => 'collapse',
    'options' => [
        ['name' => 'open', 'type' => 'bool', 'default' => 'false', 'values' => 'true = renders open attribute'],
        ['name' => 'modifier', 'type' => 'string|array', 'default' => 'null', 'values' => 'arrow, plus, open, close'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
