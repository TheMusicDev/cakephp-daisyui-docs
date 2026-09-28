<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FeedbackHelper;

return [
    'title' => 'Skeleton',
    'category' => 'Feedback',
    'description' => 'A skeleton component for showing loading states.',
    'helper' => FeedbackHelper::class,
    'method' => 'skeleton',
    'options' => [
        ['name' => 'text', 'type' => 'string', 'default' => 'null', 'values' => 'Text to display (creates a text skeleton)'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
