<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Navigation->navbar([
    'start' => $this->Actions->button('daisyUI', ['appearance' => 'ghost']),
    'center' => $this->Navigation->menu([
        ['text' => 'Home', 'url' => '/'],
        ['text' => 'About', 'url' => '/about'],
        ['text' => 'Services', 'url' => '/services'],
    ], ['direction' => 'horizontal']),
    'end' => $this->Actions->button('Login', ['color' => 'primary']),
], ['class' => 'bg-base-200']) ?>
