<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Timeline',
    'category' => 'Data display',
    'description' => 'Timeline shows a list of events in chronological order.',
    'helper' => DataDisplayHelper::class,
    'method' => 'timeline',
    'options' => [
        ['name' => 'modifier', 'type' => 'string|array', 'default' => 'null', 'values' => 'snap-icon, compact'],
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'vertical, horizontal'],
        ['name' => 'connect', 'type' => 'bool', 'default' => 'true', 'values' => 'false = omit hr dividers'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
