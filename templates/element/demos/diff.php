<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->diff(
    $this->Html->image('https://picsum.photos/id/1018/800/450', ['alt' => 'Mountain landscape in colour']),
    $this->Html->image('https://picsum.photos/id/1018/800/450?grayscale', ['alt' => 'The same landscape in grayscale']),
    ['class' => 'aspect-16/9 max-w-md'],
) ?>
