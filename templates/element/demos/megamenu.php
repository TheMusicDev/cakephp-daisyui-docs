<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Navigation->megamenuButton('Menu', 'demo-mega', ['class' => 'sm:hidden']) ?>

<?php
$items = [
    [
        'label' => 'Products',
        'content' => '<ul class="menu"><li><a href="#">Electronics</a></li><li><a href="#">Clothing</a></li></ul>',
    ],
    [
        'label' => 'Services',
        'content' => '<ul class="menu"><li><a href="#">Consulting</a></li><li><a href="#">Support</a></li></ul>',
    ],
    [
        'label' => 'Company',
        'content' => '<ul class="menu"><li><a href="#">About</a></li><li><a href="#">Contact</a></li></ul>',
    ],
];
?>

<?= $this->Navigation->megamenu('demo-mega', $items, ['class' => 'max-sm:megamenu-vertical p-2 border border-base-300']) ?>
