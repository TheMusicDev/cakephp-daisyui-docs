<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\ActionsHelper;

return [
    'title' => 'Button',
    'category' => 'Actions',
    'description' => 'A clickable button or link. Renders `<button>` by default, or `<a>` when `url` is set.',
    'helper' => ActionsHelper::class,
    'method' => 'button',
    'options' => [
        [
            'name' => 'color',
            'type' => 'string',
            'default' => 'null',
            'values' => 'neutral, primary, secondary, accent, info, success, warning, error',
        ],
        [
            'name' => 'appearance',
            'type' => 'string',
            'default' => 'null',
            'values' => 'outline, dash, soft, ghost, link',
        ],
        [
            'name' => 'behavior',
            'type' => 'string|array',
            'default' => 'null',
            'values' => 'active, disabled',
            'description' => '`disabled` adds `btn-disabled`, `tabindex="-1"`, `role="button"` and '
                . '`aria-disabled="true"`, plus the `disabled` attribute on `<button>`.',
        ],
        [
            'name' => 'size',
            'type' => 'string',
            'default' => 'null',
            'values' => 'xs, sm, md, lg, xl',
        ],
        [
            'name' => 'modifier',
            'type' => 'string|array',
            'default' => 'null',
            'values' => 'wide, block, square, circle',
        ],
        [
            'name' => 'url',
            'type' => 'string|array',
            'default' => 'null',
            'values' => 'Any URL Html->link() accepts',
            'description' => 'Renders an `<a>` via `Html->link()` instead of a `<button>` (no `type` attribute).',
        ],
        [
            'name' => 'type',
            'type' => 'string',
            'default' => "'button'",
            'values' => 'button, submit, reset',
            'description' => 'Only on `<button>`.',
        ],
        [
            'name' => 'class',
            'type' => 'string|array',
            'default' => 'null',
            'values' => 'Extra classes, appended',
        ],
        [
            'name' => 'escape',
            'type' => 'bool',
            'default' => 'true',
            'values' => 'false = output text as raw HTML',
        ],
    ],
];
