<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('code', ['type' => 'otp', 'label' => 'Verification code']) ?>
<?= $this->Form->control('pin', ['type' => 'otp', 'length' => 4, 'modifier' => 'joined', 'color' => 'primary']) ?>
<?= $this->Form->control('token', ['type' => 'otp', 'length' => 5, 'size' => 'sm', 'help' => 'Check your authenticator app.']) ?>
<?= $this->Form->end() ?>
