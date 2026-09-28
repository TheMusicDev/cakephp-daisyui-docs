<?php
/**
 * Docs layout, built with the plugin's own components (drawer, navbar, menu,
 * theme controller, footer).
 *
 * @var \App\View\AppView $this
 */

use App\Data\ComponentRegistry;

$current = (string)$this->getRequest()->getParam('pass.0');

$menu = [[
    'text' => 'All components',
    'url' => ['controller' => 'Components', 'action' => 'index'],
    'active' => $current === '',
]];
foreach (ComponentRegistry::all() as $category => $components) {
    $menu[] = ['title' => $category];
    foreach ($components as $slug => $component) {
        $menu[] = [
            'text' => (string)$component['title'],
            'url' => ['controller' => 'Components', 'action' => 'view', $slug],
            'active' => $slug === $current,
        ];
    }
}

$hamburger = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"'
    . ' stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg>';

// A mark tied to the site's own content: every Usage block on the site is a PHP options array.
$mark = '<span class="inline-flex items-center justify-center w-8 h-8 rounded-box bg-primary'
    . ' text-primary-content font-mono font-bold text-sm" aria-hidden="true">{ }</span>';
$brand = $this->Html->link(
    $mark . '<span class="text-lg font-semibold tracking-tight">cakephp-daisyui</span>',
    '/',
    ['escapeTitle' => false, 'class' => 'flex items-center gap-2 px-2'],
);

$github = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"'
    . ' aria-hidden="true"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113'
    . '.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7'
    . ' 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305'
    . ' 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22'
    . '-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138'
    . ' 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0'
    . ' 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69'
    . '.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>';

// A plain package-box mark: Packagist's own logo is too detailed to read at nav-icon size.
$packagist = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"'
    . ' stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'
    . '<path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0'
    . ' 0 0 3 8v8a2 2 0 0 0 1 1.73z"/><path d="M12 22V12"/><polyline points="3.29 7 12 12 20.71 7"/>'
    . '<path d="m7.5 4.27 9 5.15"/></svg>';
$packagistUrl = 'https://packagist.org/packages/themusicdev/cakephp-daisyui';

$navbar = $this->Navigation->navbar([
    'start' => $this->Layout->drawerButton($hamburger, 'docs-drawer', [
        'escape' => false,
        'appearance' => 'ghost',
        'modifier' => 'square',
        'class' => 'lg:hidden',
        'aria-label' => 'Open menu',
    ]) . $brand,
    'end' => $this->Html->link($packagist, $packagistUrl, [
        'escapeTitle' => false,
        'class' => 'btn btn-ghost btn-circle',
        'aria-label' => 'Packagist package',
        'target' => '_blank',
        'rel' => 'noopener',
    ]) . $this->Html->link($github, 'https://github.com/TheMusicDev/cakephp-daisyui', [
        'escapeTitle' => false,
        'class' => 'btn btn-ghost btn-circle',
        'aria-label' => 'GitHub repository',
        'target' => '_blank',
        'rel' => 'noopener',
    ]) . $this->Actions->themeController(),
], ['class' => 'bg-base-200 border-b border-base-300 sticky top-0 z-10']);

$footer = $this->Layout->footer([
    ['title' => 'Project', 'links' => [
        'GitHub' => 'https://github.com/TheMusicDev/cakephp-daisyui',
        'Packagist' => $packagistUrl,
        'Docs source' => 'https://github.com/TheMusicDev/cakephp-daisyui-docs',
    ]],
    ['title' => 'Built on', 'links' => [
        'daisyUI' => 'https://daisyui.com',
        'CakePHP' => 'https://cakephp.org',
        'Tailwind CSS' => 'https://tailwindcss.com',
    ]],
    ['title' => 'License', 'content' => '<p>MIT © TheMusicDev LLC</p>'],
], ['direction' => 'horizontal', 'class' => 'bg-base-200 p-10 mt-12']);

$main = '<header>' . $navbar . '</header>'
    . '<main class="p-6 lg:p-10 max-w-5xl">' . (string)$this->Flash->render() . $this->fetch('content') . '</main>'
    . $footer;

$side = '<nav aria-label="Components" class="min-h-full">'
    . $this->Navigation->menu($menu, ['class' => 'bg-base-100 min-h-full w-72 p-4 border-r border-base-300'])
    . '</nav>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cakephp-daisyui: <?= $this->fetch('title') ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <?= $this->Assets->css() ?>
    <style type="text/tailwindcss">
        @theme {
            --font-sans: 'Manrope', ui-sans-serif, system-ui, sans-serif;
            --font-mono: 'JetBrains Mono', ui-monospace, SFMono-Regular, monospace;
        }
    </style>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Layout->drawer('docs-drawer', $main, $side, ['class' => 'lg:drawer-open']) ?>
    <?= $this->Html->script('docs') ?>
</body>
</html>
