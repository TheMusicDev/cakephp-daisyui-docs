<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Feedback->alert('Default alert') ?>
<?= $this->Feedback->alert('Info alert', ['color' => 'info']) ?>
<?= $this->Feedback->alert('Soft warning', ['color' => 'warning', 'appearance' => 'soft']) ?>
<?= $this->Feedback->alert('Vertical layout', ['direction' => 'vertical']) ?>
<?= $this->Feedback->alert('<span><b>Alert</b> with markup</span>', ['escape' => false]) ?>
<?= $this->Feedback->alert('Quiet status message', ['role' => 'status']) ?>
