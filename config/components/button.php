<?php
declare(strict_types=1);

return [
    'category' => 'Actions',
    'title' => 'Button',
    'description' => 'A clickable button or link. Renders `<button>` by default, '
        . 'or `<a>` when `url` is set.',
    'helper' => 'Actions',
    'method' => 'button',
    'options' => [
        ['name' => 'color', 'values' => 'neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'daisyUI color class.'],
        ['name' => 'appearance', 'values' => 'outline, dash, soft, ghost, link', 'description' => 'daisyUI style (outline/dash/soft/ghost/link).'],
        ['name' => 'behavior', 'values' => 'active, disabled', 'description' => '`active` adds `btn-active`; `disabled` adds `btn-disabled`, `tabindex="-1"`, `role="button"` and `aria-disabled="true"`, plus the `disabled` attribute on `<button>`.'],
        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'daisyUI size class.'],
        ['name' => 'modifier', 'values' => 'wide, block, square, circle', 'description' => 'daisyUI modifier class.'],
        ['name' => 'url', 'values' => 'string or array', 'description' => 'When set, renders `<a>` via `Html->link()` instead of `<button>` (no `type` attribute).'],
        ['name' => 'type', 'values' => 'submit, reset, …', 'description' => 'Overrides the default `type="button"` on `<button>`.'],
        ['name' => 'class', 'values' => 'string or array', 'description' => 'Extra CSS classes, appended to the daisyUI classes.'],
        ['name' => 'escape', 'values' => 'true (default), false', 'description' => '`false` passes the text through unescaped.'],
    ],
];