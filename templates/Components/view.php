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
<?= $this->Docs->codeBlock($this->Docs->signature($component['helper'], $component['method']), true) ?>

<h2 class="text-xl font-semibold mt-8 mb-2">Demo</h2>
<div
    class="rounded-box border border-base-300 bg-base-200 p-6 flex flex-col gap-4"
    style="background-image: radial-gradient(circle, color-mix(in oklab, var(--color-base-content) 18%, transparent) 1px, transparent 1px); background-size: 18px 18px;"
>
    <?= $this->element('demos/' . $slug) ?>
</div>

<h2 class="text-xl font-semibold mt-8 mb-2">Usage</h2>
<?= $this->Docs->codeBlock($demoSource) ?>

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
