<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Navigation->tabs([
    ['title' => 'Tab 1'],
    ['title' => 'Tab 2'],
    ['title' => 'Tab 3'],
]) ?>
<?= $this->Navigation->tabs([
    ['title' => 'Content Tab 1', 'content' => '<p>This is tab 1 content</p>'],
    ['title' => 'Content Tab 2', 'content' => '<p>This is tab 2 content</p>'],
], ['appearance' => 'box']) ?>
<?= $this->Navigation->tabs([
    ['title' => 'Small', 'active' => true],
    ['title' => 'Lifted'],
    ['title' => 'Disabled', 'url' => '/', 'disabled' => true],
], ['size' => 'sm', 'appearance' => 'lift']) ?>
<?= $this->Navigation->tabs([
    ['title' => 'Tabs below', 'content' => '<p>The tab row sits under the content.</p>', 'active' => true],
    ['title' => 'Second', 'content' => '<p>Second panel.</p>'],
], ['placement' => 'bottom', 'appearance' => 'border']) ?>
