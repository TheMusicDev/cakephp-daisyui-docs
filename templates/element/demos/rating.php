<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('stars', ['type' => 'rating', 'value' => 3]) ?>
<?= $this->Form->control('quality', ['type' => 'rating', 'max' => 3, 'size' => 'lg', 'required' => true]) ?>
<?= $this->Form->control('score', ['type' => 'rating', 'modifier' => 'half', 'value' => 2.5, 'help' => 'Half stars allowed.']) ?>
<?= $this->Form->end() ?>
