<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Card',
    'category' => 'Data display',
    'description' => 'Cards group and show content.',
    'helper' => DataDisplayHelper::class,
    'method' => 'card',
    'options' => [
        ['name' => 'body (1st argument)', 'type' => 'string', 'default' => 'required', 'values' => 'Plain text, escaped, wrapped in <p>; with escape = false output raw, not wrapped'],
        ['name' => 'title', 'type' => 'string', 'default' => 'null', 'values' => 'Plain text, always escaped, rendered as <h2 class="card-title">'],
        ['name' => 'actions', 'type' => 'string', 'default' => 'null', 'values' => 'Raw HTML (e.g. button helper output), rendered as <div class="card-actions">'],
        ['name' => 'image', 'type' => 'string|array', 'default' => 'null', 'values' => 'Image path, passed to Html::image(), rendered in a <figure> before the body'],
        ['name' => 'imageAlt', 'type' => 'string', 'default' => "''", 'values' => 'Alt text for the image'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'modifier', 'type' => 'string|array', 'default' => 'null', 'values' => 'side, image-full'],
        ['name' => 'appearance', 'type' => 'string|array', 'default' => 'null', 'values' => 'border, dash'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
        ['name' => 'escape', 'type' => 'bool', 'default' => 'true', 'values' => 'false = output body as raw HTML (not wrapped in <p>)'],
    ],
];
