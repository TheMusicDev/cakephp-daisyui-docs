<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\FlashHelper;

return [
    'title' => 'Flash messages',
    'category' => 'Feedback',
    'description' => 'CakePHP flash messages rendered as daisyUI alerts. Set them in a controller '
        . '(`$this->Flash->success(\'Saved\')`) and call `$this->Flash->render()` in your layout. '
        . 'The standard types (default, success, error, warning, info) use this plugin\'s elements; '
        . 'your own elements (e.g. `flash/custom`) render unchanged. Restyle a standard type by overriding '
        . '`templates/plugin/TheMusicDev/DaisyUi/element/flash/<type>.php` in your app.',
    'helper' => FlashHelper::class,
    'method' => 'render',
    'options' => [
        [
            'name' => 'element',
            'type' => 'string',
            'default' => "'default'",
            'values' => 'default, success, error, warning, info (or your own)',
            'description' => 'Set by FlashComponent: `$this->Flash->success()` uses `success`. Picks the alert color.',
        ],
        [
            'name' => 'escape',
            'type' => 'bool',
            'default' => 'true',
            'values' => 'false = output the message as raw HTML',
            'description' => 'FlashComponent option: `$this->Flash->success($html, [\'escape\' => false])`.',
        ],
        [
            'name' => 'params.class',
            'type' => 'string',
            'default' => 'null',
            'values' => 'Extra classes, appended to the alert',
            'description' => 'Pass as `[\'params\' => [\'class\' => \'mb-4\']]`.',
        ],
        [
            'name' => 'params.dismiss',
            'type' => 'bool',
            'default' => 'true',
            'values' => 'false = no ✕ button',
            'description' => 'Dismissing needs no JavaScript: a hidden checkbox toggled by the ✕ hides the alert.',
        ],
        [
            'name' => 'params.alert',
            'type' => 'array',
            'default' => '[]',
            'values' => 'Any FeedbackHelper::alert() option',
            'description' => 'e.g. `[\'params\' => [\'alert\' => [\'appearance\' => \'soft\']]]`.',
        ],
    ],
];
