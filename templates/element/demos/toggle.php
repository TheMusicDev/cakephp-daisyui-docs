<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('notifications', ['type' => 'toggle', 'label' => 'Email notifications']) ?>
<?= $this->Form->control('dark_mode', ['type' => 'toggle', 'color' => 'primary', 'checked' => true]) ?>
<?= $this->Form->control('compact', ['type' => 'toggle', 'size' => 'sm', 'color' => 'success']) ?>
<?= $this->Form->end() ?>
