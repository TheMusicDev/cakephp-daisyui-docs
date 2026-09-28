<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Layout->stack(
    '<div class="card w-48 shadow-md"><div class="card-body">First card</div></div>'
        . '<div class="card w-48 shadow-md"><div class="card-body">Second card</div></div>'
        . '<div class="card w-48 shadow-md"><div class="card-body">Third card</div></div>',
    ['class' => 'w-48'],
) ?>

<div class="mt-4">
    <?= $this->Layout->stack(
        '<div class="card w-48 shadow-md"><div class="card-body">First</div></div>'
            . '<div class="card w-48 shadow-md"><div class="card-body">Second</div></div>'
            . '<div class="card w-48 shadow-md"><div class="card-body">Third</div></div>',
        ['modifier' => 'top', 'class' => 'w-48'],
    ) ?>
</div>
