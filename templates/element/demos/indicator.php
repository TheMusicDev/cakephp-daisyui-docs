<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Layout->indicator(
    '<button class="btn">Button</button>',
    '<div class="badge badge-primary">5</div>',
    ['placement' => ['bottom', 'start']],
) ?>

<div class="mt-4">
    <?= $this->Layout->indicator(
        '<img src="/img/cake-logo.png" alt="Avatar" class="w-12 h-12 rounded-full" />',
        '<div class="w-4 h-4 bg-green-500 rounded-full"></div>',
        ['placement' => ['bottom', 'end']],
    ) ?>
</div>
