<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Kbd',
    'category' => 'Data display',
    'description' => 'Kbd shows keyboard shortcuts.',
    'helper' => DataDisplayHelper::class,
    'method' => 'kbd',
    'options' => [
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output text as raw HTML'],
    ],
];
