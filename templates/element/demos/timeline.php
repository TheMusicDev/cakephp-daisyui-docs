<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->timeline([
    ['start' => 'Jan', 'middle' => '●', 'end' => 'New Year'],
    ['start' => 'Feb', 'middle' => '●', 'end' => 'Love Day'],
    ['start' => 'Mar', 'middle' => '●', 'end' => 'Spring'],
    ['start' => 'Apr', 'middle' => '●', 'end' => 'April Fools'],
]) ?>
<?= $this->DataDisplay->timeline([
    ['start' => 'Event 1', 'end' => 'Jan 1st'],
    ['start' => 'Event 2', 'end' => 'Jan 2nd'],
    ['start' => 'Event 3', 'end' => 'Jan 3rd'],
], ['modifier' => 'compact', 'direction' => 'vertical']) ?>
