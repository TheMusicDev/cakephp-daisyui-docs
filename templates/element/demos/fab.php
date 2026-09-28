<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Actions->fab('✓', [
    ['icon' => '✎', 'label' => 'Edit'],
    ['icon' => '⊕', 'label' => 'Add'],
    ['icon' => '✗', 'label' => 'Delete', 'color' => 'error'],
], ['class' => 'relative']) ?>
<?= $this->Actions->fab('✓', [
    ['icon' => '✎', 'label' => 'Edit'],
    ['icon' => '⊕', 'label' => 'Add'],
    ['icon' => '✗', 'label' => 'Delete'],
], ['modifier' => 'flower', 'class' => 'relative']) ?>
