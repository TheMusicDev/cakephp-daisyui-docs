<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Actions->dropdown(
    'Menu',
    '<ul class="menu bg-base-100 rounded-box w-52 p-2 shadow-sm"><li><a href="#">Item 1</a></li><li><a href="#">Item 2</a></li><li><a href="#">Item 3</a></li></ul>',
) ?>
<?= $this->Actions->dropdown(
    'Placement',
    '<ul class="menu bg-base-100 rounded-box w-52 p-2 shadow-sm"><li><a href="#">Top</a></li><li><a href="#">Center</a></li></ul>',
    ['placement' => 'end'],
) ?>
<?= $this->Actions->dropdown(
    'Hover to open',
    '<ul class="menu bg-base-100 rounded-box w-52 p-2 shadow-sm"><li><a href="#">Hover 1</a></li><li><a href="#">Hover 2</a></li></ul>',
    ['modifier' => 'hover'],
) ?>
<?= $this->Actions->dropdown(
    'Top placement',
    '<ul class="menu bg-base-100 rounded-box w-52 p-2 shadow-sm"><li><a href="#">Top 1</a></li><li><a href="#">Top 2</a></li></ul>',
    ['placement' => 'top'],
) ?>
