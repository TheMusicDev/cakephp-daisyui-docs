<?php
/**
 * @var \App\View\AppView $this
 * @var array<string, mixed> $component
 * @var string $slug
 */
$demoPath = ROOT . DS . 'templates' . DS . 'element' . DS . 'demos' . DS . $slug . '.php';
$demoSource = is_file($demoPath) ? (string)file_get_contents($demoPath) : '';
?>
<h1><?= h((string)($component['title'] ?? $slug)) ?></h1>
<p><?= h((string)($component['description'] ?? '')) ?></p>
<?php if (!empty($component['options'])): ?>
    <h2>Options</h2>
    <table>
        <thead>
            <tr><th>Option</th><th>Values</th><th>Description</th></tr>
        </thead>
        <tbody>
        <?php foreach ($component['options'] as $option): ?>
            <tr>
                <td><code><?= h((string)$option['name']) ?></code></td>
                <td><?= h((string)$option['values']) ?></td>
                <td><?= h((string)$option['description']) ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>
<h2>Demo</h2>
<?= $this->element('demos/' . $slug) ?>
<h2>Usage</h2>
<pre><code><?= h($demoSource) ?></code></pre>