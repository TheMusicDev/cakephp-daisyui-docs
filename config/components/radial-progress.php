<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FeedbackHelper;

return [
    'title' => 'Radial progress',
    'category' => 'Feedback',
    'description' => 'Shows task progress or the passage of time in a circular format.',
    'helper' => FeedbackHelper::class,
    'method' => 'radialProgress',
    'options' => [
        ['name' => 'text', 'type' => 'string', 'default' => '"{value}%"', 'values' => 'Plain text, always escaped'],
        ['name' => 'diameter', 'type' => 'string', 'default' => 'null', 'values' => 'e.g. "12rem", "8rem"'],
        ['name' => 'thickness', 'type' => 'string', 'default' => 'null', 'values' => 'e.g. "2px", "0.5rem"'],
        ['name' => 'role', 'type' => 'string', 'default' => "'progressbar'", 'values' => 'Overridable ARIA role'],
        ['name' => 'aria-valuenow', 'type' => 'string', 'default' => '{value}', 'values' => 'Overridable ARIA attribute'],
        ['name' => 'aria-valuemin', 'type' => 'string', 'default' => "'0'", 'values' => 'Overridable ARIA attribute'],
        ['name' => 'aria-valuemax', 'type' => 'string', 'default' => "'100'", 'values' => 'Overridable ARIA attribute'],
        ['name' => 'style', 'type' => 'string', 'default' => 'null', 'values' => 'Appended after generated CSS variables'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
