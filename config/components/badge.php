<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Badge',
    'category' => 'Data display',
    'description' => 'Badges show the status of specific data.',
    'helper' => DataDisplayHelper::class,
    'method' => 'badge',
    'options' => [
        ['name' => 'color', 'type' => 'string', 'default' => 'null', 'values' => 'neutral, primary, secondary, accent, info, success, warning, error'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'outline, dash, soft, ghost'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output text as raw HTML'],
    ],
];