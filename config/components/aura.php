<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Aura',
    'category' => 'Data display',
    'description' => 'An aura adds a glow or shine effect around content.',
    'helper' => DataDisplayHelper::class,
    'method' => 'aura',
    'options' => [
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'dual, rainbow, holo, gold, silver, glow'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
