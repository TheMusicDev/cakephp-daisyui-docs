<?php
/**
 * @var \App\View\AppView $this
 * @var array<string, mixed> $component
 * @var string $slug
 */
$this->assign('title', (string)($component['title'] ?? $slug));
$demoPath = ROOT . DS . 'templates' . DS . 'element' . DS . 'demos' . DS . $slug . '.php';
$demoSource = is_file($demoPath) ? (string)file_get_contents($demoPath) : '';
?>
<p class="text-sm opacity-70"><?= h((string)($component['category'] ?? '')) ?></p>
<h1 class="text-3xl font-bold mb-2"><?= h((string)($component['title'] ?? $slug)) ?></h1>
<p class="mb-6"><?= h((string)($component['description'] ?? '')) ?></p>

<h2 class="text-xl font-semibold mt-8 mb-2">Signature</h2>
<pre class="bg-base-200 rounded-box p-4 overflow-x-auto text-sm"><code><?= h($this->Docs->signature($component['helper'], $component['method'])) ?></code></pre>

<h2 class="text-xl font-semibold mt-8 mb-2">Demo</h2>
<div class="border border-base-300 rounded-box p-6 flex flex-col gap-4">
    <?= $this->element('demos/' . $slug) ?>
</div>

<h2 class="text-xl font-semibold mt-8 mb-2">Usage</h2>
<pre class="bg-base-200 rounded-box p-4 overflow-x-auto text-sm"><code><?= h($demoSource) ?></code></pre>

<?php if (!empty($component['options'])): ?>
    <h2 class="text-xl font-semibold mt-8 mb-2">Options</h2>
    <?= $this->DataDisplay->table($component['options'], [
        'name' => 'Name',
        'type' => 'Type',
        'default' => 'Default',
        'values' => 'Values',
        'description' => 'Description',
    ], ['modifier' => 'zebra', 'size' => 'sm', 'rowHeader' => true]) ?>
<?php endif ?>
