<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null, ['type' => 'file']) ?>
<?= $this->Form->control('photo', ['type' => 'file', 'accept' => 'image/*']) ?>
<?= $this->Form->control('resume', ['type' => 'file', 'color' => 'primary', 'size' => 'sm']) ?>
<?= $this->Form->control('attachment', ['type' => 'file', 'appearance' => 'ghost', 'help' => 'Max 2 MB.']) ?>
<?= $this->Form->end() ?>
