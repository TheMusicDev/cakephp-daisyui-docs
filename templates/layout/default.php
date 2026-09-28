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

$navbar = $this->Navigation->navbar([
    'start' => $this->Layout->drawerButton($hamburger, 'docs-drawer', [
        'escape' => false,
        'appearance' => 'ghost',
        'modifier' => 'square',
        'class' => 'lg:hidden',
        'aria-label' => 'Open menu',
    ]) . $this->Html->link('cakephp-daisyui', '/', ['class' => 'text-xl font-bold px-2']),
    'end' => $this->Actions->themeController(),
], ['class' => 'bg-base-200 sticky top-0 z-10']);

$footer = $this->Layout->footer([
    ['title' => 'Project', 'links' => [
        'GitHub' => 'https://github.com/TheMusicDev/cakephp-daisyui',
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
    <?= $this->Assets->css() ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Layout->drawer('docs-drawer', $main, $side, ['class' => 'lg:drawer-open']) ?>
</body>
</html>
