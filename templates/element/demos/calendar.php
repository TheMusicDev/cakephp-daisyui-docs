<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('start_date', ['type' => 'date']) ?>
<?= $this->Form->control('meeting', ['type' => 'datetime-local', 'color' => 'primary']) ?>
<?= $this->Form->control('trip', ['type' => 'date', 'min' => '2026-01-01', 'max' => '2026-12-31', 'help' => 'Trips in 2026 only.']) ?>
<?= $this->Form->end() ?>
