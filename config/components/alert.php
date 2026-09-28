<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FeedbackHelper;

return [
    'title' => 'Alert',
    'category' => 'Feedback',
    'description' => 'Alerts give users information about an important event.',
    'helper' => FeedbackHelper::class,
    'method' => 'alert',
    'options' => [
        ['name' => 'color', 'type' => 'string', 'default' => 'null', 'values' => 'info, success, warning, error'],
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'outline, dash, soft'],
        ['name' => 'direction', 'type' => 'string', 'default' => 'null', 'values' => 'vertical, horizontal'],
        ['name' => 'role', 'type' => 'string', 'default' => "'alert'", 'values' => 'Any ARIA role, e.g. status'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output text as raw HTML (for icons + markup)'],
    ],
];
