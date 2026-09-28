<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\LayoutHelper;

return [
    'title' => 'Footer',
    'category' => 'Layout',
    'description' => 'Pass raw HTML, or a list of sections — each rendered as a `<nav>` column with an escaped '
        . '`title` (`footer-title`), `links` (`[\'About\' => \'/about\']` or `[[\'text\' => …, \'url\' => …]]`, '
        . 'styled `link link-hover`) and raw `content`. This site\'s footer is built with it.',
    'helper' => LayoutHelper::class,
    'method' => 'footer',
    'options' => [
        ['name' => 'placement', 'type' => 'string', 'default' => 'null', 'values' => 'center'],
        [
            'name' => 'direction',
            'type' => 'string',
            'default' => 'null',
            'values' => 'horizontal, vertical',
            'description' => 'For a responsive footer pass `class => sm:footer-horizontal` instead.',
        ],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
