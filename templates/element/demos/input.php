<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('name', ['placeholder' => 'Default']) ?>
<?= $this->Form->control('email', ['type' => 'email', 'color' => 'primary']) ?>
<?= $this->Form->control('password', ['type' => 'password', 'size' => 'sm']) ?>
<?= $this->Form->control('search', ['type' => 'search', 'appearance' => 'ghost', 'placeholder' => 'Ghost input']) ?>
<?= $this->Form->control('birthday', ['type' => 'date', 'size' => 'lg', 'color' => 'accent']) ?>
<?= $this->Form->end() ?>
