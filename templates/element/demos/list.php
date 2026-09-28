<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->list(['Item 1', 'Item 2', 'Item 3']) ?>
<?= $this->DataDisplay->list([
    ['text' => 'Alice'],
    ['text' => 'Bob'],
    ['text' => 'Charlie'],
]) ?>
<?= $this->DataDisplay->list([
    ['text' => 'First item', 'class' => 'font-bold'],
    ['text' => 'Second item', 'class' => 'text-gray-500'],
], ['class' => 'border']) ?>
