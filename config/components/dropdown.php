<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\ActionsHelper;

return [
    'title' => 'Dropdown',
    'category' => 'Actions',
    'description' => 'Dropdown can open a menu or another element when the user clicks the button.',
    'helper' => ActionsHelper::class,
    'method' => 'dropdown',
    'options' => [
        ['name' => 'buttonClass', 'type' => 'string|array', 'default' => "'btn'", 'values' => 'Class(es) for the summary element'],
        ['name' => 'open', 'type' => 'bool', 'default' => 'false', 'values' => 'true = details is initially open'],
        ['name' => 'placement', 'type' => 'string|array', 'default' => 'null', 'values' => 'start, center, end, top, bottom, left, right'],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'hover, open, close'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output button text as raw HTML'],
    ],
];
