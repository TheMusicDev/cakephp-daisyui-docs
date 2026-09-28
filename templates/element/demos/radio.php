<?php
/**
 * @var \App\View\AppView $this
 */
$sizes = ['s' => 'Small', 'm' => 'Medium', 'l' => 'Large'];
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('size', ['type' => 'radio', 'options' => $sizes, 'label' => 'T-shirt size']) ?>
<?= $this->Form->control('delivery', [
    'type' => 'radio',
    'options' => ['standard' => 'Standard', 'express' => 'Express'],
    'color' => 'primary',
    'size' => 'sm',
    'help' => 'Express costs extra.',
]) ?>
<?= $this->Form->end() ?>
