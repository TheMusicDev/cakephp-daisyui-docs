<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Rating',
    'category' => 'Data input',
    'description' => '`type => rating` renders star-shaped radios in a daisyUI `rating`, grouped in a '
        . 'fieldset/legend. Each star has an `aria-label` ("3 stars"). Unless the field is `required`, '
        . 'a hidden first radio lets the user clear the rating.',
    'helper' => FormHelper::class,
    'method' => 'control',
    'options' => [
        ['name' => 'type', 'type' => 'string', 'default' => 'null', 'values' => "'rating'"],
        ['name' => 'max', 'type' => 'int', 'default' => '5', 'values' => 'Number of stars'],
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        [
            'name' => 'modifier',
            'type' => 'string',
            'default' => 'null',
            'values' => 'half',
            'description' => 'Half stars: values go up in 0.5 steps.',
        ],
        ['name' => 'required', 'type' => 'bool', 'default' => 'false', 'values' => 'true = no clear option'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the rating div'],
    ],
];
