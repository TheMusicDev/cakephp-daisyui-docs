<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(null) ?>
<?= $this->Form->control('framework', [
    'type' => 'filter',
    'options' => ['cake' => 'CakePHP', 'laravel' => 'Laravel', 'symfony' => 'Symfony'],
]) ?>
<?= $this->Form->control('status', [
    'type' => 'filter',
    'options' => ['open' => 'Open', 'closed' => 'Closed'],
    'reset' => 'All',
    'label' => 'Status',
]) ?>
<?= $this->Form->end() ?>
