<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->accordion([
    ['title' => 'Item 1', 'content' => 'This is item 1 content'],
    ['title' => 'Item 2', 'content' => 'This is item 2 content'],
    ['title' => 'Item 3', 'content' => 'This is item 3 content'],
]) ?>
<?= $this->DataDisplay->accordion([
    ['title' => 'With Arrow', 'content' => 'Content with arrow modifier', 'open' => true],
    ['title' => 'Also with Arrow', 'content' => 'More content'],
], ['modifier' => 'arrow']) ?>
