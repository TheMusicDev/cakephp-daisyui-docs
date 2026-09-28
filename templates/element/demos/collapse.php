<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->collapse('Click me', 'This is the collapsed content') ?>
<?= $this->DataDisplay->collapse('Arrow collapse', 'Content with arrow', ['modifier' => 'arrow']) ?>
<?= $this->DataDisplay->collapse('Open by default', 'This is open', ['open' => true, 'modifier' => 'plus']) ?>
