<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FeedbackHelper;

return [
    'title' => 'Toast',
    'category' => 'Feedback',
    'description' => 'A toast is a wrapper that stacks elements in a corner of the page.',
    'helper' => FeedbackHelper::class,
    'method' => 'toast',
    'options' => [
        ['name' => 'placement', 'type' => 'string|array', 'default' => 'null', 'values' => 'start, center, end, top, middle, bottom'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
