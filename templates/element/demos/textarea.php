<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('bio', ['type' => 'textarea', 'placeholder' => 'Tell us about yourself']) ?>
<?= $this->Form->control('notes', ['type' => 'textarea', 'color' => 'primary', 'size' => 'sm', 'rows' => 3]) ?>
<?= $this->Form->control('comment', ['type' => 'textarea', 'appearance' => 'ghost', 'help' => 'Markdown is not supported.']) ?>
<?= $this->Form->end() ?>
