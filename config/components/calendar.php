<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Calendar',
    'category' => 'Data input',
    'description' => 'daisyUI\'s calendar only styles third-party JavaScript calendars, so this plugin uses the '
        . 'browser\'s native date picker (decision 16): `$this->Form->control($field, [\'type\' => \'date\'])` '
        . 'renders a daisyUI `input`. `$this->DataInput->calendar()` throws and points here.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        ['name' => 'type', 'type' => 'string', 'default' => 'null', 'values' => "'date', 'time', 'datetime-local', 'month', 'week'"],
        ['name' => 'min', 'type' => 'string', 'default' => 'null', 'values' => "Earliest date, e.g. '2026-01-01'"],
        ['name' => 'max', 'type' => 'string', 'default' => 'null', 'values' => 'Latest date'],
    ],
];
