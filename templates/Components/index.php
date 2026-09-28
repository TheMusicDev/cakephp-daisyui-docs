<?php
/**
 * @var \App\View\AppView $this
 * @var array<string, array<string, array<string, mixed>>> $grouped
 */
?>
<h1>cakephp-daisyui components</h1>
<?php foreach ($grouped as $category => $components): ?>
    <h2><?= h($category) ?></h2>
    <ul>
    <?php foreach ($components as $slug => $component): ?>
        <li><?= $this->Html->link((string)($component['title'] ?? $slug), ['action' => 'view', $slug]) ?></li>
    <?php endforeach ?>
    </ul>
<?php endforeach ?>