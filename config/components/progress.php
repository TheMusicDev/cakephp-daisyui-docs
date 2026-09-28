<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FeedbackHelper;

return [
    'title' => 'Progress',
    'category' => 'Feedback',
    'description' => 'Shows task progress or the passage of time.',
    'helper' => FeedbackHelper::class,
    'method' => 'progress',
    'options' => [
        ['name' => 'max', 'type' => 'int|float', 'default' => '100', 'values' => 'Any numeric value'],
        ['name' => 'color', 'type' => 'string', 'default' => 'null', 'values' => 'neutral, primary, secondary, accent, info, success, warning, error'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
