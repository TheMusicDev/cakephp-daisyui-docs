<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Actions->modalTrigger('Open modal', 'demo-modal') ?>
<?= $this->Actions->modal('demo-modal', '<p>Press Esc or use the button to close.</p>', ['title' => 'Hello!']) ?>

<?= $this->Actions->modalTrigger('Delete…', 'demo-confirm', ['color' => 'error']) ?>
<?= $this->Actions->modal('demo-confirm', '<p>This cannot be undone.</p>', [
    'title' => 'Delete this item?',
    'actions' => $this->Actions->button('Delete', ['color' => 'error']),
    'close' => 'Cancel',
    'backdropClose' => true,
]) ?>

<?= $this->Actions->modalTrigger('Bottom sheet', 'demo-bottom', ['appearance' => 'outline']) ?>
<?= $this->Actions->modal('demo-bottom', '<p>Anchored to the bottom on every screen size.</p>', [
    'placement' => 'bottom',
    'backdropClose' => true,
]) ?>
