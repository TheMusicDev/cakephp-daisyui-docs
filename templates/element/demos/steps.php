<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Navigation->steps(['First', 'Second', 'Third', 'Fourth']) ?>
<?= $this->Navigation->steps([
    ['text' => 'Step 1', 'color' => 'primary'],
    ['text' => 'Step 2', 'color' => 'primary'],
    ['text' => 'Step 3'],
    ['text' => 'Step 4'],
], ['direction' => 'vertical']) ?>
