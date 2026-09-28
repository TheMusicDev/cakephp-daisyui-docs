<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->stats([
    ['title' => 'Downloads', 'value' => '31K', 'desc' => 'Jan 1st - Feb 1st'],
    ['title' => 'Users', 'value' => '4,000', 'desc' => 'Jun 1st - Jul 1st'],
    ['title' => 'Files', 'value' => '1,200', 'desc' => 'May 1st - Jun 1st'],
]) ?>
<?= $this->DataDisplay->stats([
    ['title' => 'Total Downloads', 'value' => '89,400'],
    ['title' => 'Total Users', 'value' => '12,234'],
    ['title' => 'Total Files', 'value' => '3,567'],
], ['direction' => 'vertical']) ?>
