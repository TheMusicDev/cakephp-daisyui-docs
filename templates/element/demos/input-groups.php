<?php
/**
 * @var \App\View\AppView $this
 */
$search = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="none"'
    . ' stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="7"/>'
    . '<path d="m20 20-3.5-3.5"/></svg>';
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('price', ['type' => 'number', 'prepend' => '$', 'append' => 'USD']) ?>
<?= $this->Form->control('website', ['type' => 'url', 'prepend' => 'https://', 'color' => 'primary']) ?>
<?= $this->Form->control('q', ['type' => 'search', 'label' => 'Search', 'prepend' => ['text' => $search, 'escape' => false]]) ?>
<?= $this->Form->end() ?>
