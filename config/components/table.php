<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Table',
    'category' => 'Data display',
    'description' => 'Rows are arrays or entities (e.g. a paginated query); each cell is read with '
        . '`Hash::get($row, $path)`, so association paths like `author.name` work. Cell values and labels '
        . 'are escaped; a column\'s `format` callable returns raw HTML. Columns: '
        . '`[\'title\', \'author.name\' => \'Author\', \'status\' => [\'label\' => …, \'format\' => fn($value, $row) => …, \'class\' => …]]`.',
    'helper' => DataDisplayHelper::class,
    'method' => 'table',
    'options' => [
        ['name' => 'size', 'type' => 'string', 'default' => 'null', 'values' => 'xs, sm, md, lg, xl'],
        ['name' => 'modifier', 'type' => 'string|array', 'default' => 'null', 'values' => 'zebra, pin-rows, pin-cols'],
        ['name' => 'caption', 'type' => 'string', 'default' => 'null', 'values' => 'Plain text (escaped)'],
        ['name' => 'empty', 'type' => 'string', 'default' => 'null', 'values' => 'Text shown when there are no rows'],
        ['name' => 'rowHeader', 'type' => 'bool', 'default' => 'false', 'values' => 'true = first column as <th scope="row">'],
        [
            'name' => 'wrap',
            'type' => 'bool',
            'default' => 'true',
            'values' => 'false = no scroll wrapper',
            'description' => 'The wrapper class comes from the class-map key `table.part.wrapper` (`overflow-x-auto`).',
        ],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes on the table'],
    ],
];
