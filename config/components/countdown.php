<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Countdown',
    'category' => 'Data display',
    'description' => 'A countdown displays a number with a transition effect.',
    'helper' => DataDisplayHelper::class,
    'method' => 'countdown',
    'options' => [
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
