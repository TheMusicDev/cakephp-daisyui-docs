<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\PaginatorHelper;

return [
    'title' => 'Pagination',
    'category' => 'Navigation',
    'description' => 'CakePHP\'s Paginator helper, styled as a daisyUI join of buttons. '
        . '`prev()`, `next()`, `first()`, `last()` and `numbers()` all render `join-item btn` links; '
        . '`links()` puts prev + numbers + next in a join inside a `<nav>`. '
        . 'In an app the controller\'s `paginate()` provides the paging data; this demo sets it by hand.',
    'helper' => PaginatorHelper::class,
    'method' => 'links',
    'options' => [
        ['name' => 'prev', 'type' => 'string', 'default' => "'«'", 'values' => 'Any text (escaped)'],
        ['name' => 'next', 'type' => 'string', 'default' => "'»'", 'values' => 'Any text (escaped)'],
        [
            'name' => 'numbers',
            'type' => 'array',
            'default' => '[]',
            'values' => 'Options for numbers(), e.g. first, last, modulus',
        ],
        ['name' => 'label', 'type' => 'string', 'default' => "'Pagination'", 'values' => 'aria-label of the <nav>'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the join'],
    ],
];
