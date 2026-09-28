<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->card('If a dog chews shoes, whose shoes does he chew?') ?>
<?= $this->DataDisplay->card('Body with a title', ['title' => 'Shoes!']) ?>
<?= $this->DataDisplay->card(
    'A bordered card with actions.',
    [
        'title' => 'Buy shoes',
        'actions' => $this->Actions->button('Buy Now', ['color' => 'primary']),
        'appearance' => 'border',
    ],
) ?>
<?= $this->DataDisplay->card('Card with an image.', [
    'image' => 'https://picsum.photos/id/1015/400/225',
    'imageAlt' => 'CakePHP logo',
]) ?>
<?= $this->DataDisplay->card('Side layout, medium.', [
    'title' => 'Side card',
    'image' => 'https://picsum.photos/id/1025/400/225',
    'imageAlt' => 'CakePHP logo',
    'size' => 'md',
    'modifier' => 'side',
]) ?>
<?= $this->DataDisplay->card('<p>Raw markup, not wrapped in a paragraph.</p>', ['escape' => false]) ?>
