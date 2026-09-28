<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Actions->swap('ON', 'OFF') ?>
<?= $this->Actions->swap(
    '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="24" height="24"><circle cx="12" cy="12" r="9" fill="currentColor"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/></svg>',
    ['appearance' => 'rotate'],
) ?>
<?= $this->Actions->swap('🌙', '☀️', ['appearance' => 'flip']) ?>
<?= $this->Actions->swap('ON', 'OFF', ['checked' => true]) ?>
<?= $this->Actions->swap('Toggle', 'Switch', ['label' => 'Custom label']) ?>
