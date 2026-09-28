<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Text Rotate',
    'category' => 'Data display',
    'description' => 'Text rotate displays rotating lines of text.',
    'helper' => DataDisplayHelper::class,
    'method' => 'textRotate',
    'options' => [
        ['name' => 'innerClass', 'type' => 'string', 'default' => 'null', 'values' => 'Classes on inner span'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
