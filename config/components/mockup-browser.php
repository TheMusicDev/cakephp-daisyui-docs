<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\MockupHelper;

return [
    'title' => 'Browser Mockup',
    'category' => 'Mockup',
    'description' => 'A browser mockup displays content inside a browser frame.',
    'helper' => MockupHelper::class,
    'method' => 'browser',
    'options' => [
        ['name' => 'url', 'type' => 'string', 'default' => 'null', 'values' => 'URL to display in toolbar'],
        ['name' => 'toolbar', 'type' => 'string', 'default' => 'null', 'values' => 'Raw HTML toolbar content'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
