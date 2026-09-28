<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Accordion',
    'category' => 'Data display',
    'description' => 'Accordion shows and hides content. Only one item can be open at a time.',
    'helper' => DataDisplayHelper::class,
    'method' => 'accordion',
    'options' => [
        ['name' => 'name', 'type' => 'string', 'default' => 'null', 'values' => 'Radio group name (auto-generated if omitted)'],
        ['name' => 'modifier', 'type' => 'string|array', 'default' => 'null', 'values' => 'arrow, plus; applied to all items'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, applied to all items'],
    ],
];
