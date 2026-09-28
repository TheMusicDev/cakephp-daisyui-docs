<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\ActionsHelper;

return [
    'title' => 'No values',
    'category' => 'Actions',
    'description' => 'An option row without "values".',
    'helper' => ActionsHelper::class,
    'method' => 'button',
    'options' => [
        ['name' => 'color', 'type' => 'string', 'default' => 'null'],
    ],
];
