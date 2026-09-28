<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('name') ?>
<?= $this->Form->control('email', ['type' => 'email', 'help' => 'We never share your email.']) ?>
<?= $this->Form->end() ?>

<?= $this->Form->create([
    'schema' => ['email' => ['type' => 'string']],
    'errors' => ['email' => ['Please enter a valid email address.']],
]) ?>
<?= $this->Form->control('email', ['help' => 'Your work address.']) ?>
<?= $this->Form->end() ?>
