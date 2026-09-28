<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Layout->hero(
    '<h1 class="text-5xl font-bold">Welcome</h1><p class="py-6">This is a hero section.</p>'
        . '<button class="btn btn-primary">Get Started</button>',
    [
        'class' => 'bg-base-200 min-h-64',
        'contentClass' => 'text-center',
    ],
) ?>

<div class="mt-4">
    <?= $this->Layout->hero(
        '<h2 class="text-3xl font-bold">With Overlay</h2><p class="py-4">This hero has an overlay.</p>',
        [
            'overlay' => true,
            'contentClass' => 'text-center text-white',
            'class' => 'min-h-64',
            'style' => 'background-color: #2d3748',
        ],
    ) ?>
</div>
