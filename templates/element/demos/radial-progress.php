<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Feedback->radialProgress(0) ?>
<?= $this->Feedback->radialProgress(20) ?>
<?= $this->Feedback->radialProgress(60) ?>
<?= $this->Feedback->radialProgress(80) ?>
<?= $this->Feedback->radialProgress(100) ?>
<?= $this->Feedback->radialProgress(75, ['diameter' => '8rem', 'thickness' => '0.5rem']) ?>
<?= $this->Feedback->radialProgress(40, ['text' => 'Done']) ?>
<?= $this->Feedback->radialProgress(55, ['class' => 'text-primary']) ?>
