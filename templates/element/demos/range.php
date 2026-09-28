<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('volume', ['type' => 'range', 'value' => 40]) ?>
<?= $this->Form->control('brightness', ['type' => 'range', 'color' => 'primary', 'size' => 'sm', 'value' => 70]) ?>
<?= $this->Form->control('rating', ['type' => 'range', 'min' => 1, 'max' => 5, 'step' => 1, 'value' => 3, 'color' => 'accent']) ?>
<?= $this->Form->control('level', ['type' => 'range', 'direction' => 'vertical', 'value' => 50]) ?>
<?= $this->Form->end() ?>
