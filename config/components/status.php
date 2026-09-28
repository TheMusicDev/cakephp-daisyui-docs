<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Status',
    'category' => 'Data display',
    'description' => 'Status shows the current state of an element.',
    'helper' => DataDisplayHelper::class,
    'method' => 'status',
    'options' => [
        ['name' => 'color', 'type' => 'string', 'default' => 'null', 'values' => 'neutral, primary, secondary, accent, info, success, warning, error'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        [
            'name' => 'role',
            'type' => 'string',
            'default' => 'null',
            'values' => 'Any valid HTML role',
            'description' => 'Unlabelled statuses get `aria-hidden="true"` and no role; with `aria-label` the default role is `img`.',
        ],
        ['name' => 'aria-hidden', 'type' => 'string', 'default' => "'true'", 'values' => 'Omitted if aria-label is provided'],
        ['name' => 'aria-label', 'type' => 'string', 'default' => 'null', 'values' => 'Accessible label; omits aria-hidden when set'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
