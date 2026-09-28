<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->diff(
    $this->Html->image('cake-logo.png', ['alt' => 'Image 1']),
    $this->Html->image('cake-logo.png', ['alt' => 'Image 2', 'class' => 'grayscale']),
    ['class' => 'aspect-16/9 max-w-md'],
) ?>
