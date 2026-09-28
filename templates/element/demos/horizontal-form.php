<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null, ['align' => 'horizontal']) ?>
<?= $this->Form->control('name') ?>
<?= $this->Form->control('email', ['type' => 'email', 'help' => 'We never share it.']) ?>
<?= $this->Form->control('plan', ['options' => ['free' => 'Free', 'pro' => 'Pro']]) ?>
<?= $this->Form->control('newsletter', ['type' => 'toggle']) ?>
<?= $this->Form->end() ?>
