<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="space-y-4">
    <div>
        <h4>Default Drawer</h4>
        <?= $this->Layout->drawer(
            'demo-drawer-1',
            $this->Layout->drawerButton('Open drawer', 'demo-drawer-1', ['color' => 'primary']) .
            '<div class="p-4"><p>This is the main content area.</p></div>',
            '<ul class="menu bg-base-200 min-h-full w-80 p-4">' .
                '<li><a href="#">Item 1</a></li>' .
                '<li><a href="#">Item 2</a></li>' .
                '<li><a href="#">Item 3</a></li>' .
            '</ul>',
        ) ?>
    </div>
    <div>
        <h4>Drawer with End Placement</h4>
        <?= $this->Layout->drawer(
            'demo-drawer-2',
            $this->Layout->drawerButton('Open', 'demo-drawer-2', ['color' => 'secondary']) .
            '<div class="p-4"><p>Content on the left.</p></div>',
            '<ul class="menu bg-base-200 min-h-full w-80 p-4">' .
                '<li><a href="#">Menu Item</a></li>' .
            '</ul>',
            ['placement' => 'end'],
        ) ?>
    </div>
</div>
