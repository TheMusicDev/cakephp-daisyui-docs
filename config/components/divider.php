<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\LayoutHelper;

return [
    'title' => 'Divider',
    'category' => 'Layout',
    'description' => 'A separator line or divider.',
    'helper' => LayoutHelper::class,
    'method' => 'divider',
    'options' => [
        ['name' => 'color', 'type' => 'string', 'default' => 'null', 'values' => 'neutral, primary, secondary, accent, success, warning, info, error'],
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'vertical, horizontal'],
        ['name' => 'placement', 'type' => 'string', 'default' => 'null', 'values' => 'start, end'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output text as raw HTML'],
    ],
];
