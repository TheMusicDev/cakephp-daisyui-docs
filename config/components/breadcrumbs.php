<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\BreadcrumbsHelper;

return [
    'title' => 'Breadcrumbs',
    'category' => 'Navigation',
    'description' => 'CakePHP\'s Breadcrumbs helper, rendered as daisyUI breadcrumbs in a `<nav>`. '
        . 'Add crumbs with `add()` / `prepend()`, then `render()`. Unlike the core helper, crumb titles '
        . 'are escaped by default. The nav\'s aria-label comes from the helper config `label`.',
    'helper' => BreadcrumbsHelper::class,
    'method' => 'render',
    'options' => [
        [
            'name' => 'escape',
            'type' => 'bool',
            'default' => 'true',
            'values' => 'false = raw HTML title',
            'description' => 'Per crumb: `add($title, $url, [\'escape\' => false])`.',
        ],
        [
            'name' => 'label',
            'type' => 'string',
            'default' => "'Breadcrumb'",
            'values' => 'aria-label of the <nav>',
            'description' => 'Helper config, e.g. `$this->addHelper(\'Breadcrumbs\', [\'label\' => \'…\'])`.',
        ],
    ],
];
