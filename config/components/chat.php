<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Chat',
    'category' => 'Data display',
    'description' => 'A chat bubble displays one message in a conversation with optional image, header, footer, and color.',
    'helper' => DataDisplayHelper::class,
    'method' => 'chat',
    'options' => [
        ['name' => 'placement', 'type' => 'string', 'default' => "'start'", 'values' => 'start, end'],
        ['name' => 'color', 'type' => 'string', 'default' => 'null', 'values' => 'neutral, primary, secondary, accent, info, success, warning, error'],
        ['name' => 'image', 'type' => 'string', 'default' => 'null', 'values' => 'Raw HTML for avatar/image'],
        ['name' => 'header', 'type' => 'string', 'default' => 'null', 'values' => 'Plain text, escaped'],
        ['name' => 'footer', 'type' => 'string', 'default' => 'null', 'values' => 'Plain text, escaped'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output message as raw HTML'],
    ],
];
