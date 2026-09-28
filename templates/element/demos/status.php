<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->status(['color' => 'neutral']) ?>
<?= $this->DataDisplay->status(['color' => 'primary']) ?>
<?= $this->DataDisplay->status(['color' => 'secondary']) ?>
<?= $this->DataDisplay->status(['color' => 'accent']) ?>
<?= $this->DataDisplay->status(['color' => 'info']) ?>
<?= $this->DataDisplay->status(['color' => 'success']) ?>
<?= $this->DataDisplay->status(['color' => 'warning']) ?>
<?= $this->DataDisplay->status(['color' => 'error']) ?>
<br />
<?= $this->DataDisplay->status(['size' => 'xs']) ?>
<?= $this->DataDisplay->status(['size' => 'xl']) ?>
<br />
<?= $this->DataDisplay->status(['color' => 'success', 'aria-label' => 'Online']) ?>
