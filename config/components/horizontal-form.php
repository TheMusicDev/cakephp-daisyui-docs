<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FormHelper;

return [
    'title' => 'Horizontal form layout',
    'category' => 'Data input',
    'description' => '`$this->Form->create($entity, [\'align\' => \'horizontal\'])` puts labels in a first column '
        . 'and fields, help and errors in a second, until `end()`. Radio/checkbox groups and ratings stay stacked. '
        . 'The grid classes come from the class-map keys `control.layout.horizontal` and `control.layout.offset`.',
    'helper' => FormHelper::class,
    'method' => 'create',
    'options' => [
        ['name' => 'align', 'type' => 'string', 'default' => 'null', 'values' => "'horizontal'"],
    ],
];
