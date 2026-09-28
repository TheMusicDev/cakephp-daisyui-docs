<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('email', [
    'type' => 'email',
    'required' => true,
    'validator' => true,
    'hint' => 'Enter a valid email address.',
]) ?>
<?= $this->Form->control('age', ['type' => 'number', 'min' => 18, 'max' => 99, 'validator' => true, 'hint' => 'Between 18 and 99.']) ?>
<?= $this->Form->end() ?>
