<?php
/**
 * @var \App\View\AppView $this
 */
$flavors = ['vanilla' => 'Vanilla', 'chocolate' => 'Chocolate', 'strawberry' => 'Strawberry'];
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('flavor', ['options' => $flavors, 'empty' => 'Pick a flavor']) ?>
<?= $this->Form->control('topping', ['options' => $flavors, 'color' => 'primary', 'size' => 'sm']) ?>
<?= $this->Form->control('cone', ['options' => $flavors, 'appearance' => 'ghost']) ?>
<?= $this->Form->control('extras', ['options' => $flavors, 'multiple' => true, 'help' => 'Hold Ctrl/Cmd to pick several.']) ?>
<?= $this->Form->end() ?>
