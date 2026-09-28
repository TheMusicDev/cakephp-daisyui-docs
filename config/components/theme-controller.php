<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\ActionsHelper;

return [
    'title' => 'Theme controller',
    'category' => 'Actions',
    'description' => 'Two themes render a toggle (unchecked = first, checked = second); three or more render a '
        . 'dropdown of radio buttons. Themes default to `Configure::read(\'DaisyUi.themes\')` (light, dark). '
        . '`$this->Assets->css()` emits a small inline script (`DaisyUi.persistTheme`, default true) that applies '
        . 'the saved theme — or, for a two-theme toggle, the OS dark-mode setting — before first paint, and '
        . 'saves changes in localStorage. Non light/dark themes load daisyUI\'s themes.css automatically.',
    'helper' => ActionsHelper::class,
    'method' => 'themeController',
    'options' => [
        [
            'name' => 'label',
            'type' => 'string',
            'default' => "'Theme'",
            'values' => 'Plain text (escaped)',
            'description' => 'The toggle\'s aria-label, or the dropdown button text.',
        ],
        ['name' => 'toggle', 'type' => 'bool', 'default' => 'true', 'values' => 'false = plain checkbox (two themes)'],
        [
            'name' => 'class',
            'type' => 'string|array',
            'default' => 'null',
            'values' => 'Extra classes',
            'description' => 'On the checkbox for two themes; on the dropdown `<details>` for three or more.',
        ],
        [
            'name' => 'menuClass',
            'type' => 'string|array',
            'default' => "'menu bg-base-200 rounded-box w-52 p-2 shadow-sm'",
            'values' => 'Classes of the dropdown panel (3+ themes)',
            'description' => 'Default comes from the class-map key `themeController.part.menu`.',
        ],
        [
            'name' => 'placement',
            'type' => 'string|array',
            'default' => 'null',
            'values' => 'Dropdown placements (3+ themes)',
            'description' => 'Any dropdown() option works for 3+ themes.',
        ],
    ],
];
