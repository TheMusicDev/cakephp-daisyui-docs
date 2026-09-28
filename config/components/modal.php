<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\ActionsHelper;

return [
    'title' => 'Modal',
    'category' => 'Actions',
    'description' => 'A native `<dialog>`; `modalTrigger($text, $id)` renders the button that opens it '
        . '(`onclick="document.getElementById(…).showModal()"`). Esc closes it. The id must start with a letter '
        . 'and contain only letters, digits, `_` and `-` (it goes into inline JavaScript). Inline `onclick` needs '
        . '`unsafe-inline` or a nonce under a strict Content-Security-Policy.',
    'helper' => ActionsHelper::class,
    'method' => 'modal',
    'options' => [
        ['name' => 'title', 'type' => 'string', 'default' => 'null', 'values' => 'Plain text (escaped)'],
        [
            'name' => 'actions',
            'type' => 'string',
            'default' => 'null',
            'values' => 'Raw HTML',
            'description' => 'Placed next to the close button, outside its dialog form, so it may contain forms (e.g. postLink).',
        ],
        ['name' => 'close', 'type' => 'string|false', 'default' => "'Close'", 'values' => 'Button text (escaped), or false for none'],
        ['name' => 'backdropClose', 'type' => 'bool', 'default' => 'false', 'values' => 'true = clicking outside closes'],
        ['name' => 'placement', 'type' => 'string', 'default' => 'null', 'values' => 'top, middle, bottom, start, end'],
        ['name' => 'modifier', 'type' => 'string', 'default' => 'null', 'values' => 'open'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the dialog'],
    ],
];
