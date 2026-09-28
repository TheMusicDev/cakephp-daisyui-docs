<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Fieldset',
    'category' => 'Data input',
    'description' => 'Every `$this->Form->control()` renders as a daisyUI fieldset: the label as '
        . '`fieldset-legend`, the field, an optional help line and the validation error. '
        . 'Errors add the field\'s error color plus `aria-invalid` / `aria-describedby`. '
        . 'As in core, required fields get inline validity-message handlers (`autoSetCustomValidity`).',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        ['name' => 'label', 'type' => 'string|array|false', 'default' => 'null', 'values' => 'Text (escaped), label options, or false'],
        [
            'name' => 'help',
            'type' => 'string',
            'default' => 'null',
            'values' => 'Plain text (escaped)',
            'description' => 'Shown below the field as `<p class="label">`, linked with `aria-describedby`.',
        ],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the field'],
        [
            'name' => 'type',
            'type' => 'string',
            'default' => 'null',
            'values' => 'Any core control type',
            'description' => 'Types the plugin doesn\'t style yet render as in core.',
        ],
    ],
];
