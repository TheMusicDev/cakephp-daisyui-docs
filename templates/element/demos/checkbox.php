<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('remember', ['type' => 'checkbox', 'label' => 'Remember me']) ?>
<?= $this->Form->control('terms', ['type' => 'checkbox', 'color' => 'primary', 'size' => 'sm', 'label' => 'I accept the terms']) ?>
<?= $this->Form->control('toppings', [
    'multiple' => 'checkbox',
    'options' => ['cheese' => 'Cheese', 'olives' => 'Olives', 'basil' => 'Basil'],
    'color' => 'accent',
    'help' => 'Pick as many as you like.',
]) ?>
<?= $this->Form->end() ?>
