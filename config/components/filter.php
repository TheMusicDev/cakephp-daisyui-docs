<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Filter',
    'category' => 'Data input',
    'description' => '`type => filter` renders the options as button-styled radios in a daisyUI `filter` '
        . '(the `<div>` variant — a nested `<form>` would be invalid inside a CakePHP form), with a reset radio first. '
        . 'Selecting one hides the others. Each option\'s label is shown through its `aria-label`.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        ['name' => 'type', 'type' => 'string', 'default' => 'null', 'values' => "'filter'"],
        ['name' => 'options', 'type' => 'array', 'default' => '[]', 'values' => 'value => label (escaped)'],
        ['name' => 'reset', 'type' => 'string', 'default' => "'×'", 'values' => 'Reset button text'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the filter div'],
    ],
];
