<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\ActionsHelper;

return [
    'title' => 'Swap',
    'category' => 'Actions',
    'description' => 'Swap shows one of two elements and changes the visibility based on a checkbox state.',
    'helper' => ActionsHelper::class,
    'method' => 'swap',
    'options' => [
        ['name' => 'label', 'type' => 'string', 'default' => '__("Toggle")', 'values' => 'Plain text for checkbox aria-label'],
        ['name' => 'checked', 'type' => 'bool', 'default' => 'false', 'values' => 'true = checkbox is initially checked'],
        ['name' => 'indeterminate', 'type' => 'string', 'default' => 'null', 'values' => 'Raw HTML shown in indeterminate state'],
        ['name' => 'appearance', 'type' => 'string', 'default' => 'null', 'values' => 'rotate, flip'],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'active'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
