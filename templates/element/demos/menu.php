<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="space-y-4">
    <div>
        <h4>Vertical Menu (default)</h4>
        <?= $this->Navigation->menu([
            ['text' => 'Home', 'url' => '/'],
            ['text' => 'About', 'url' => '/about'],
            ['text' => 'Contact', 'url' => '/contact'],
        ]) ?>
    </div>
    <div>
        <h4>Horizontal Menu</h4>
        <?= $this->Navigation->menu([
            ['text' => 'Home', 'url' => '/'],
            ['text' => 'About', 'url' => '/about'],
            ['text' => 'Contact', 'url' => '/contact'],
        ], ['direction' => 'horizontal']) ?>
    </div>
    <div>
        <h4>Menu with Submenu</h4>
        <?= $this->Navigation->menu([
            ['text' => 'Dashboard', 'url' => '/'],
            [
                'text' => 'Settings',
                'url' => '#',
                'children' => [
                    ['text' => 'Profile', 'url' => '/settings/profile'],
                    ['text' => 'Security', 'url' => '/settings/security'],
                ],
            ],
            ['text' => 'Logout', 'url' => '/logout'],
        ]) ?>
    </div>
    <div>
        <h4>Menu with Different Sizes</h4>
        <?= $this->Navigation->menu([
            ['text' => 'Small'],
        ], ['size' => 'sm', 'direction' => 'horizontal']) ?>
        <?= $this->Navigation->menu([
            ['text' => 'Large'],
        ], ['size' => 'lg', 'direction' => 'horizontal']) ?>
    </div>
</div>
