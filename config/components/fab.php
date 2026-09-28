<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\ActionsHelper;

return [
    'title' => 'FAB',
    'category' => 'Actions',
    'description' => 'A floating action button with optional speed dial actions.',
    'helper' => ActionsHelper::class,
    'method' => 'fab',
    'options' => [
        ['name' => 'label', 'type' => 'string', 'default' => "__('Open actions')", 'values' => 'Aria label for trigger'],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'flower'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
