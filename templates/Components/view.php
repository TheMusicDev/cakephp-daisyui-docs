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
<h2>Signature</h2>
<pre><code><?= h($this->Docs->signature($component['helper'], $component['method'])) ?></code></pre>
<h2>Demo</h2>
<?= $this->element('demos/' . $slug) ?>
<h2>Usage</h2>
<pre><code><?= h($demoSource) ?></code></pre>
<?php if (!empty($component['options'])): ?>
    <h2>Options</h2>
    <table>
        <thead>
            <tr><th>Name</th><th>Type</th><th>Default</th><th>Values</th><th>Description</th></tr>
        </thead>
        <tbody>
        <?php foreach ($component['options'] as $option): ?>
            <tr>
                <td><?= h((string)$option['name']) ?></td>
                <td><?= h((string)$option['type']) ?></td>
                <td><?= h((string)$option['default']) ?></td>
                <td><?= h((string)$option['values']) ?></td>
                <td><?= h((string)($option['description'] ?? '')) ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>
