<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->textRotate(['Hello', 'World']) ?>
<?= $this->DataDisplay->textRotate(['First', 'Second', 'Third']) ?>
<?= $this->DataDisplay->textRotate(['A', 'B'], ['innerClass' => 'font-bold']) ?>
