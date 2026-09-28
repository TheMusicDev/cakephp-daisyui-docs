<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Feedback->progress(0) ?>
<?= $this->Feedback->progress(40) ?>
<?= $this->Feedback->progress(70) ?>
<?= $this->Feedback->progress(100) ?>
<?= $this->Feedback->progress(40, ['color' => 'primary']) ?>
<?= $this->Feedback->progress(60, ['color' => 'secondary']) ?>
<?= $this->Feedback->progress(80, ['color' => 'success']) ?>
<?= $this->Feedback->progress(50, ['max' => 200]) ?>
<?= $this->Feedback->progress(null) ?>
