<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Feedback->tooltip($this->Actions->button('Top'), 'Top tooltip', ['placement' => 'top']) ?>
<?= $this->Feedback->tooltip($this->Actions->button('Bottom'), 'Bottom tooltip', ['placement' => 'bottom']) ?>
<?= $this->Feedback->tooltip($this->Actions->button('Left'), 'Left tooltip', ['placement' => 'left']) ?>
<?= $this->Feedback->tooltip($this->Actions->button('Bottom, start'), 'Aligned to the start', ['placement' => 'bottom', 'alignment' => 'start']) ?>
<?= $this->Feedback->tooltip($this->Actions->button('Right'), 'Right tooltip', ['placement' => 'right']) ?>
<?= $this->Feedback->tooltip($this->Actions->button('Primary'), 'Primary tooltip', ['color' => 'primary']) ?>
<?= $this->Feedback->tooltip($this->Actions->button('Open'), 'Always open', ['modifier' => 'open']) ?>
<?= $this->Feedback->tooltip($this->Actions->button('Rich tip'), '<strong>This</strong> is a <em>rich</em> tooltip', ['escape' => false]) ?>
