<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('username', ['label' => 'Choose a username']) ?>
<?= $this->Form->control('email', ['type' => 'email', 'floating' => true]) ?>
<?= $this->Form->control('city', ['floating' => true, 'label' => 'Your city', 'placeholder' => 'e.g. Lisbon']) ?>
<?= $this->Form->end() ?>
