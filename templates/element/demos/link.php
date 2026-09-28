<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Navigation->link('Default link', '/') ?>
<?= $this->Navigation->link('Primary link', '/', ['color' => 'primary']) ?>
<?= $this->Navigation->link('Hover effect', '/', ['appearance' => 'hover']) ?>
<?= $this->Navigation->link('Secondary', '/', ['color' => 'secondary']) ?>
<?= $this->Navigation->link('Error', '/', ['color' => 'error']) ?>
