<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FeedbackHelper;

return [
    'title' => 'Tooltip',
    'category' => 'Feedback',
    'description' => 'Shows a message when the pointer is on an element.',
    'helper' => FeedbackHelper::class,
    'method' => 'tooltip',
    'options' => [
        ['name' => 'placement', 'type' => 'string', 'default' => 'null', 'values' => 'top, bottom, left, right'],
        ['name' => 'alignment', 'type' => 'string', 'default' => 'null', 'values' => 'start, center, end'],
        ['name' => 'color', 'type' => 'string', 'default' => 'null', 'values' => 'primary, secondary, accent, info, success, warning, error'],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'open'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output tip as raw HTML in tooltip-content child'],
    ],
];
