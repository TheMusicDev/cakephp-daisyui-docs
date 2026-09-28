<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FeedbackHelper;

return [
    'title' => 'Loading',
    'category' => 'Feedback',
    'description' => 'Loading shows a loading animation while a process runs.',
    'helper' => FeedbackHelper::class,
    'method' => 'loading',
    'options' => [
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'spinner, dots, ring, ball, bars, infinity'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'role', 'type' => 'string', 'default' => "'status'", 'values' => 'Any valid HTML role attribute'],
        ['name' => 'aria-label', 'type' => 'string', 'default' => "'Loading'", 'values' => 'Accessible label text'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
