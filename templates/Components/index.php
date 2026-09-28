<?php
/**
 * @var \App\View\AppView $this
 * @var array<string, array<string, array<string, mixed>>> $grouped
 */
$this->assign('title', 'Components');
?>
<h1 class="text-3xl font-bold mb-2">cakephp-daisyui</h1>
<p class="mb-8">daisyUI 5 view helpers for CakePHP 5. Every page below is rendered by the real helper.</p>
<?php foreach ($grouped as $category => $components): ?>
    <h2 class="text-xl font-semibold mt-8 mb-4"><?= h($category) ?></h2>
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($components as $slug => $component): ?>
        <?= $this->DataDisplay->card(
            (string)($component['description'] ?? ''),
            [
                'title' => (string)($component['title'] ?? $slug),
                'actions' => $this->Actions->button('Open', [
                    'url' => ['action' => 'view', $slug],
                    'size' => 'sm',
                    'color' => 'primary',
                ]),
                'size' => 'sm',
                'appearance' => 'border',
            ],
        ) ?>
    <?php endforeach ?>
    </div>
<?php endforeach ?>
