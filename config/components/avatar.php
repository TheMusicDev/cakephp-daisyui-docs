<?php
declare(strict_types=1);

use TheMusicDev\DaisyUi\View\Helper\DataDisplayHelper;

return [
    'title' => 'Avatar',
    'category' => 'Data display',
    'description' => 'Display a thumbnail image or placeholder avatar. avatarGroup() wraps multiple avatars.',
    'helper' => DataDisplayHelper::class,
    'method' => 'avatar',
    'options' => [
        ['name' => 'alt', 'type' => 'string', 'default' => "''", 'values' => 'Any text', 'description' => 'Image alt text (for image avatars)'],
        ['name' => 'placeholder', 'type' => 'string', 'default' => "''", 'values' => 'Any text, e.g. initials', 'description' => 'Placeholder text, always escaped; used when $image is null'],
        ['name' => 'innerClass', 'type' => 'string|array', 'default' => 'null', 'values' => "e.g. 'w-16 rounded-full'", 'description' => 'Classes on the inner div only (sizing and shape go here)'],
        ['name' => 'modifier', 'type' => 'string|array', 'default' => 'null', 'values' => 'online, offline, placeholder'],
        ['name' => 'class', 'type' => 'string|array', 'default' => 'null', 'values' => 'Extra classes, appended'],
    ],
];
