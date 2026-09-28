<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Feedback->toast(
    $this->Feedback->alert('Success alert', ['color' => 'success'])
    . $this->Feedback->alert('Error alert', ['color' => 'error']),
    ['placement' => ['top', 'end'], 'class' => 'static'],
) ?>
<?= $this->Feedback->toast(
    $this->Feedback->alert('Warning alert', ['color' => 'warning']),
    ['placement' => ['bottom', 'center'], 'class' => 'static'],
) ?>
