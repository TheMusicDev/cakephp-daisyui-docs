<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\MockupHelper;

return [
    'title' => 'Code Mockup',
    'category' => 'Mockup',
    'description' => 'A code mockup displays code lines with optional line numbers.',
    'helper' => MockupHelper::class,
    'method' => 'code',
    'options' => [
        ['name' => 'prefix', 'type' => 'string', 'default' => 'null', 'values' => 'Default prefix for all lines'],
        ['name' => 'numbered', 'type' => 'bool', 'default' => 'false', 'values' => 'Auto-number lines 1, 2, 3…'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
